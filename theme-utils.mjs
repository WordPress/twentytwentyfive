import fs from 'fs';
import util from 'util';
import process from 'process';
import { RewritingStream } from 'parse5-html-rewriting-stream';
import { table, getBorderCharacters } from 'table';
import progressbar from 'string-progressbar';
import semver from 'semver';
import Ajv from 'ajv';
import AjvDraft04 from 'ajv-draft-04';
import glob from 'fast-glob';
import chalk, { Chalk } from 'chalk';

const commands = {
	'escape-patterns': {
		helpText: [
			'Escapes block patterns for pattern files.',
			'<FILES|THEMES>',
			wrapIndent(
				'Individual pattern files to escape or root directories of themes with patterns to escape.'
			),
			'--text-domain=TEXT_DOMAIN',
			wrapIndent(
				'Text domain to use for translations. If omitted and theme directories are passed, this will default to the names of the directories.'
			),
			'EXAMPLE',
			wrapIndent( 'Escape patterns for only modified files in git.' ),
			wrapIndent(
				"node theme-utils.mjs escape-patterns --text-domain=$(basename $PWD) $(git diff --name-only HEAD -- './patterns/*.php')"
			),
		].join( '\n\n' ),
		additionalArgs: '[--text-domain=TEXT_DOMAIN] <FILES|THEMES>',
		run: ( args ) => {
			const [ options, filesOrThemes ] = parseFlags( args );
			if ( ! filesOrThemes.length ) {
				filesOrThemes.push( '.' );
			}
			escapePatterns( filesOrThemes, options );
		},
	},
	'validate-theme': {
		helpText: [
			'Validates a theme against the WordPress theme requirements.',
			'<THEMES>',
			wrapIndent( 'Root directories for themes.' ),
			'--format=FORMAT',
			wrapIndent( 'Output format. Possible values: *table*, json, dir.' ),
			'--color=WHEN',
			wrapIndent(
				'Colorize the output for table or dir formats. The automatic mode only enables colors if an interactive terminal is detected. Possible values: *auto*, always, never.'
			),
			'--table-width=COLUMNS',
			wrapIndent(
				'Explicitly set the width of the table format instead of determining it automatically. Will default to 120 if omitted and width cannot be determined automatically.'
			),
		].join( '\n\n' ),
		additionalArgs:
			'[--format=FORMAT] [--color=WHEN] [--table-width=COLUMNS] <THEMES>',
		run: async ( args ) => {
			const [ options, themes ] = parseFlags( args );
			if ( ! themes.length ) {
				themes.push( '.' );
			}
			await validateThemes( themes, options );
		},
	},
	help: {
		helpText: 'Displays the main help message.',
		run: ( args ) => showHelp( args?.[ 1 ] ),
	},
};

( async function start() {
	let args = process.argv.slice( 2 );
	let command = args?.[ 0 ];

	if ( ! commands[ command ] ) {
		showHelp();
		process.exit( 1 );
	}

	await commands[ command ].run( args );
} )();

function parseFlags( originalArgs ) {
	const args = [ ...originalArgs ];
	args.shift();
	const options = {};
	while ( args?.[ 0 ]?.startsWith( '--' ) ) {
		const flag = args.shift().slice( 2 );
		const [ key, value ] = flag.split( '=' );
		const camelCaseKey = key.replace( /-([a-z])/g, ( [ , c ] ) =>
			c.toUpperCase()
		);
		options[ camelCaseKey ] = value ?? true;
	}
	return [ options, args ];
}

function wrapIndent(
	text,
	indent = '        ',
	newline = '\n',
	width = process.stdout.columns || 80
) {
	return text
		.match(
			new RegExp(
				`.{1,${ width - indent.length - 1 }}(\\s+|$)|[^\\s]+?(\\s+|$)`,
				'g'
			)
		)
		.map( ( line ) => indent + line )
		.join( newline );
}

function showHelp( command = '' ) {
	if ( ! command || ! commands.hasOwnProperty( command ) ) {
		console.log( `
node theme-utils.mjs [command]

Available commands:
_(theme-utils.mjs help [command] for more details)_

\t${ Object.keys( commands ).join( '\n\t' ) }
	` );
		return;
	}

	const { helpText, additionalArgs } = commands[ command ];
	console.log( `
${ command } ${ additionalArgs ?? '' }

${ helpText }
	` );
}

export function getThemeMetadata( styleCss, attribute ) {
	if ( ! styleCss || ! attribute ) {
		return null;
	}

	return styleCss
		.match(
			new RegExp(
				`(?<=${ attribute }:\\s*).*?(?=\\s*\\r?\\n|\\rg)`,
				'gs'
			)
		)?.[ 0 ]
		?.trim();
}

async function escapePatterns( patternsAndThemes, options ) {
	for ( const themeOrPattern of patternsAndThemes ) {
		const isTheme = fs.statSync( themeOrPattern ).isDirectory();
		const themeSlug = isTheme
			? themeOrPattern
			: themeOrPattern.split( '/', 1 )[ 0 ];
		const textDomain = options?.textDomain ?? themeSlug;
		const patterns = isTheme
			? await glob( `${ themeSlug }/patterns/*.php` )
			: [ themeOrPattern ];

		patterns.forEach( ( file ) => {
			const rewriter = getReWriter( textDomain );
			const tmpFile = `${ file }-tmp`;
			const readStream = fs.createReadStream( file, {
				encoding: 'UTF-8',
			} );
			const writeStream = fs.createWriteStream( tmpFile, {
				encoding: 'UTF-8',
			} );
			writeStream.on( 'finish', () => {
				fs.renameSync( tmpFile, file );
			} );

			readStream.pipe( rewriter ).pipe( writeStream );
		} );
	}

	// Helper functions
	function getReWriter( textDomain ) {
		const rewriter = new RewritingStream();

		rewriter.on( 'text', ( _, raw ) => {
			rewriter.emitRaw( escapeText( raw, textDomain ) );
		} );

		rewriter.on( 'startTag', ( startTag, rawHtml ) => {
			if ( startTag.tagName === 'img' ) {
				const attrs = startTag.attrs.filter( ( attr ) =>
					[ 'src', 'alt' ].includes( attr.name )
				);
				attrs.forEach( ( attr ) => {
					if ( attr.name === 'src' ) {
						attr.value = escapeImagePath( attr.value );
					} else if ( attr.name === 'alt' ) {
						attr.value = escapeText( attr.value, textDomain, true );
					}
				} );
			}

			const ariaLabel = startTag.attrs.find(
				( attr ) => attr.name === 'aria-label'
			);
			if ( ariaLabel ) {
				ariaLabel.value = escapeText(
					ariaLabel.value,
					textDomain,
					true
				);
			}

			rewriter.emitStartTag( startTag );
		} );

		rewriter.on( 'comment', ( comment, rawHtml ) => {
			if ( comment.text.startsWith( '?php' ) ) {
				rewriter.emitRaw( rawHtml );
				return;
			}
			// escape the strings in block config (blocks that are represented as comments)
			// ex: <!-- wp:search {label: "Search"} /-->
			const block = escapeBlockAttrs( comment.text, textDomain );
			rewriter.emitComment( { ...comment, text: block } );
		} );

		return rewriter;
	}

	function escapeBlockAttrs( block, textDomain ) {
		// Set isAttr to true if it is an attribute in the result HTML
		// If set to true, it generates esc_attr_, otherwise it generates esc_html_
		const allowedAttrs = [
			{ name: 'label' },
			{ name: 'placeholder', isAttr: true },
			{ name: 'buttonText' },
			{ name: 'content' },
			{ name: 'ariaLabel', isAttr: true },
		];
		const start = block.indexOf( '{' );
		const end = block.lastIndexOf( '}' );

		const configPrefix = block.slice( 0, start );
		const config = block.slice( start, end + 1 );
		const configSuffix = block.slice( end + 1 );

		try {
			const configJson = JSON.parse( config );
			allowedAttrs.forEach( ( attr ) => {
				if ( ! configJson[ attr.name ] ) return;
				configJson[ attr.name ] = escapeText(
					configJson[ attr.name ],
					textDomain,
					attr.isAttr
				);
			} );
			return configPrefix + JSON.stringify( configJson ) + configSuffix;
		} catch ( error ) {
			// do nothing
			return block;
		}
	}

	function escapeText( text, textDomain, isAttr = false ) {
		const trimmedText = text && text.trim();
		if (
			! textDomain ||
			! trimmedText ||
			trimmedText.startsWith( `<?php` )
		) {
			return text;
		}
		const escFunction = isAttr ? 'esc_attr_e' : 'esc_html_e';
		const spaceChar = text.startsWith( ' ' ) ? '&nbsp;' : '';
		const resultText = text.replace( "'", "\\'" ).trim();
		return `${ spaceChar }<?php ${ escFunction }( '${ resultText }', '${ textDomain }' ); ?>`;
	}

	function escapeImagePath( src ) {
		if ( ! src || src.trim().startsWith( '<?php' ) ) return src;

		const assetsDir = 'assets';
		const parts = src.split( '/' );
		const resultSrc = parts.slice( parts.indexOf( assetsDir ) ).join( '/' );
		return `<?php echo esc_url( get_template_directory_uri() ); ?>/${ resultSrc }`;
	}
}

/**
 * Validates theme files against their respective JSON schemas.
 *
 * @param {string} themes List of theme directories to validate
 * @param {Object} options Options for the validation
 * @param {string} options.format Output format (table, json, dir)
 * @param {string} options.color Colorize output (auto, always, never)
 * @param {number} options.tableWidth Width of the table output
 */
async function validateThemes( themes, { format, color, tableWidth } ) {
	util.inspect.styles.name = 'whiteBright';
	switch ( color ) {
		case 'always':
			chalk.level = 1;
			break;
		case 'never':
			chalk.level = 0;
			break;
	}
	const isColorized = chalk.level > 0;

	const chalkStr = new Chalk( {
		level: ! format || format === 'table' ? 1 : 0,
	} );

	function readJson( file ) {
		return fs.promises.readFile( file, 'utf-8' ).then( JSON.parse );
	}

	async function loadSchema( uri ) {
		if ( ! uri ) {
			// prettier-ignore
			throw {
				url: uri,
				message: `Missing $schema URI: ${ chalkStr.whiteBright( uri ) }`,
			};
		}

		let schema;
		if ( URL.canParse( uri ) ) {
			const url = new URL( uri );
			switch ( url.protocol ) {
				case 'http:':
				case 'https:':
					{
						const res = await fetch( url );
						if ( ! res.ok ) {
							throw {
								type: res.type,
								url: res.url,
								redirected: res.redirected,
								status: res.status,
								ok: res.ok,
								statusText: res.statusText,
								headers: res.headers,
								message: await res.text(),
							};
						}
						schema = await res.json();
					}
					break;
				case 'file:': {
					schema = readJson(
						path.resolve( dirname, url.href.slice( 7 ) )
					);
					break;
				}
				default:
					// prettier-ignore
					throw {
						url: uri,
						message: `Unsupported ${ chalkStr.whiteBright( '$schema' ) } protocol: ${ chalkStr.whiteBright( url.protocol + '//' ) }`,
					};
			}
		} else {
			schema = await readJson( path.resolve( dirname, uri ) );
		}

		// Handle schemastore $ref for older schemas
		if ( ! schema.$schema && typeof schema.$ref === 'string' ) {
			return loadSchema( schema.$ref );
		}

		return schema;
	}

	const ajvOptions = {
		strict: false,
		allErrors: true,
		loadSchema,
	};
	const ajv = {
		'http://json-schema.org/draft-07/schema#': new Ajv( ajvOptions ),
		'http://json-schema.org/draft-04/schema#': new AjvDraft04( ajvOptions ),
	};

	const progress = startProgress( themes.length );

	let problems = [];
	for ( const themeSlug of themes ) {
		const styleCssPath = `${ themeSlug }/style.css`;
		const themeJsonPath = `${ themeSlug }/theme.json`;

		if ( ! fs.existsSync( themeSlug ) ) {
			problems.push(
				createProblem( {
					type: 'error',
					theme: themeSlug,
					file: chalkStr.gray( 'undefined' ),
					data: { message: `the theme does not exist` },
				} )
			);
			progress.increment();
			continue;
		}

		if ( ! fs.existsSync( styleCssPath ) ) {
			problems.push(
				createProblem( {
					type: 'error',
					file: styleCssPath,
					data: { message: `the theme is missing a style.css file` },
				} )
			);
			progress.increment();
			continue;
		}

		const styleCss = await fs.promises.readFile( styleCssPath, 'utf-8' );
		const themeRequires = getThemeMetadata(
			styleCss,
			'Requires at least',
			true
		);
		const wpVersion = themeRequires
			? `${ themeRequires }.0`.split( '.', 2 ).join( '.' )
			: undefined;
		const hasThemeJsonSupport =
			wpVersion &&
			semver.valid( `${ wpVersion }.0` ) &&
			semver.gte( `${ wpVersion }.0`, '5.9.0' );
		const hasThemeJson = fs.existsSync( themeJsonPath );

		if ( hasThemeJson && ! hasThemeJsonSupport ) {
			problems.push(
				createProblem( {
					type: 'warning',
					file: styleCssPath,
					// prettier-ignore
					data: {
						actual: chalkStr.yellow( wpVersion ),
						expected: `${ chalkStr.yellow( '5.9' ) } or greater`,
						message: `the ${ chalkStr.green( "'Requires at least'" ) } version does not support theme.json`,
					},
				} )
			);
		}

		const validators = {
			validateVersion( attr, value, validLengths = [ 3 ] ) {
				const problems = [];
				const adjustedValue =
					value && `${ value }.0`.split( '.', 3 ).join( '.' );
				if (
					! value ||
					! validLengths.includes( value.split( '.' ).length ) ||
					! semver.valid( adjustedValue )
				) {
					problems.push( {
						actual: `${ chalkStr.green(
							attr
						) }: ${ chalkStr.yellow( value ) }`,
						expected: `format ${ chalkStr.yellow(
							Array.from( { length: Math.min( validLengths ) } )
								.fill( 'x' )
								.join( '.' )
						) }`,
						message: `${ value } is not a valid version`,
					} );
				}
				return { isValid: ! problems.length, problems };
			},
			validateVersionGte( attr, value, version ) {
				const problems = [];
				const adjustedValue =
					value && `${ value }.0`.split( '.', 3 ).join( '.' );
				const adjustedVersion =
					version && `${ version }.0`.split( '.', 3 ).join( '.' );
				if (
					! value ||
					! version ||
					! semver.valid( adjustedValue ) ||
					! semver.valid( adjustedVersion ) ||
					! semver.gte( adjustedValue, adjustedVersion )
				) {
					problems.push( {
						actual: `${ chalkStr.green(
							attr
						) }: ${ chalkStr.yellow( value ) }`,
						expected: `${ chalkStr.yellow( version ) } or greater`,
						message: `provide a valid version value`,
					} );
				}
				return { isValid: ! problems.length, problems };
			},
			validateUri: ( attr, value ) => {
				const problems = [];
				if ( value && ! URL.canParse( value ) ) {
					problems.push( {
						actual: `${ chalkStr.green(
							attr
						) }: ${ chalkStr.yellow( value ) }`,
						expected: `a valid URI`,
						message: `${ value } is not a valid URI`,
					} );
				}
				return { isValid: ! problems.length, problems };
			},
			validateThemeSlug: ( attr, value ) => {
				const problems = [];
				if ( value && ! /^[a-z0-9-]+$/.test( value ) ) {
					problems.push( {
						actual: `${ chalkStr.green(
							attr
						) }: ${ chalkStr.yellow( value ) }`,
						expected: `a valid value`,
						message: `${ value } is not a valid value`,
					} );
				}
				return { isValid: ! problems.length, problems };
			},
		};

		// validate style.css metadata
		// Spec: https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/
		const styleCssMetadata = [
			{ attribute: 'Theme Name', required: true },
			{
				attribute: 'Theme URI',
				validators: [
					{
						validate: validators.validateUri,
						type: 'warning',
					},
				],
			},
			{
				attribute: 'Author URI',
				validators: [
					{
						validate: validators.validateUri,
						type: 'warning',
					},
				],
			},
			{ attribute: 'Description', required: true },
			{
				attribute: 'Version',
				required: true,
				validators: [
					{
						validate: ( attr, value ) =>
							validators.validateVersion( attr, value, [ 2, 3 ] ),
						type: 'error',
					},
				],
			},
			{
				attribute: 'Requires at least',
				required: true,
				validators: [
					{
						validate: ( attr, value ) =>
							validators.validateVersion( attr, value, [ 2 ] ),
						type: 'error',
					},
				],
			},
			{
				attribute: 'Tested up to',
				required: true,
				validators: [
					{
						validate: ( attr, value ) =>
							validators.validateVersion( attr, value, [ 2 ] ),
						type: 'error',
					},
					{
						validate: ( attr, value ) =>
							validators.validateVersionGte(
								attr,
								value,
								themeRequires
							),
						type: 'error',
					},
				],
			},
			{
				attribute: 'Requires PHP',
				required: true,
				validators: [
					{
						validate: ( attr, value ) =>
							validators.validateVersion( attr, value, [ 2 ] ),
						type: 'error',
					},
				],
			},
			{ attribute: 'License', required: true },
			{
				attribute: 'License URI',
				required: true,
				validators: [
					{
						validate: validators.validateUri,
						type: 'warning',
					},
				],
			},
			{
				attribute: 'Text Domain',
				required: true,
				validators: [
					{
						validate: validators.validateThemeSlug,
						type: 'error',
					},
				],
			},
		];

		styleCssMetadata.forEach( ( { attribute, required, validators } ) => {
			const attributeValue = getThemeMetadata( styleCss, attribute );
			if ( ! attributeValue ) {
				problems.push(
					createProblem( {
						type: required ? 'error' : 'warning',
						file: styleCssPath,
						data: {
							message: `missing ${ chalkStr.green(
								attribute
							) } header metadata`,
						},
					} )
				);
			} else if ( validators ) {
				validators.forEach( ( { validate, type } ) => {
					const { isValid, problems: validationProblems } = validate(
						attribute,
						attributeValue
					);
					if ( ! isValid ) {
						problems = problems.concat(
							validationProblems.map( ( problem ) =>
								createProblem( {
									type: type,
									file: styleCssPath,
									data: problem,
								} )
							)
						);
					}
				} );
			}
		} );

		const validations = await Promise.all( [
			glob( `${ themeSlug }/styles/*.json` ).then( ( paths ) => ( {
				schemaType: 'theme',
				paths: [ `${ themeSlug }/theme.json`, ...paths ],
			} ) ),
			glob( `${ themeSlug }/assets/fonts/*.json` ).then( ( paths ) => ( {
				schemaType: 'font-collection',
				paths,
			} ) ),
		] );

		for ( const { schemaType, paths } of validations ) {
			for ( const file of paths ) {
				try {
					const data = await readJson( file );
					const schemaUri = hasThemeJsonSupport
						? `https://schemas.wp.org/wp/${ wpVersion }/${ schemaType }.json`
						: data.$schema;

					if ( data.$schema !== schemaUri ) {
						problems.push(
							createProblem( {
								type: 'warning',
								file,
								// prettier-ignore
								data: {
									actual: data.$schema,
									expected: schemaUri,
									message: `the ${ chalkStr.whiteBright( '$schema' ) } version does not match style.css ${ chalkStr.green( "'Requires at least'" ) } version`,
								},
							} )
						);
					}

					const schema = await loadSchema( schemaUri );
					const validate =
						await ajv[ schema.$schema ].compileAsync( schema );
					if ( ! validate( data ) ) {
						problems.push(
							createProblem( {
								type: 'warning',
								file,
								data: validate.errors,
								metadata: { schema: schemaUri },
							} )
						);
					}
				} catch ( error ) {
					problems.push(
						createProblem( { type: 'error', file, data: error } )
					);
				}
			}
		}

		progress.increment();
	}

	if ( problems.length ) {
		let output = '';
		switch ( format ) {
			case 'json':
				output = JSON.stringify( problems );
				break;
			case 'dir':
				output = util.inspect( problems, {
					depth: null,
					maxArrayLength: null,
					colors: isColorized,
				} );
				break;
			case 'table':
			default: {
				output = problemsToTable( problems, { tableWidth } );
			}
		}
		await new Promise( ( resolve, reject ) =>
			process.stdout.write( output, ( error ) =>
				error ? reject( error ) : resolve()
			)
		);
	}

	const hasError = problems.some( ( { type } ) => type === 'error' );
	if ( hasError ) {
		if ( process.stdout.isTTY && process.stderr.isTTY ) {
			console.error( chalk.red( '\n\nValidation failed.' ) );
		}
		process.exit( 1 );
	}

	if ( process.stdout.isTTY ) {
		if ( problems.length ) {
			console.log(
				chalk.yellow( '\n\nValidation passed with warnings.' )
			);
		} else {
			console.log( chalk.green( '\n\nValidation passed.' ) );
		}
	}
}

/**
 * @typedef {Object} Problem
 * @prop {'warning'|'error'} type Type of problem
 * @prop {string} theme Name of the theme
 * @prop {string} file File path, relative to the theme, where the problem exists
 * @prop {Object} metadata Additional metadata to include in logging
 * @prop {Object[]} data Array of validation problems
 */

/**
 * Creates a problem object.
 * @param {Object} options Options for creating a problem
 * @param {'warning'|'error'} options.type Type of problem
 * @param {string?} options.theme Name of the theme
 * @param {string} options.file File path where the problem exists
 * @prop {Object} metadata Additional metadata to include in logging
 * @prop {Object[]} data Array of validation problems
 * @return {Problem} Problem object
 */
function createProblem( options ) {
	const {
		type,
		metadata,
		data: problemData,
		theme: themeOverride,
		file: themeFile,
	} = options;
	const separatorIndex = themeFile.indexOf( '/' );
	const theme = themeOverride
		? themeOverride.charAt( 0 ).toUpperCase() + themeOverride.slice( 1 )
		: themeFile.charAt( 0 ).toUpperCase() +
		  themeFile.slice( 1, separatorIndex );
	const file = themeFile.slice( separatorIndex + 1 );
	const data = Array.isArray( problemData ) ? problemData : [ problemData ];
	return { type, theme, file, metadata, data };
}

/**
 * Similar to Object.entries, but includes non-enumerable properties and
 * traverses the prototype chain.
 *
 * @param {Object} obj Any object
 * @return {Array<[string, any]>} An array of key-value pairs
 */
function objectOwnPropertiesEntries( obj ) {
	const visited = new Set();
	const propertyNames = new Set();

	let currentObj = obj;
	while ( currentObj !== null ) {
		if ( visited.has( currentObj ) ) {
			break;
		}
		visited.add( currentObj );

		for ( const name of Object.getOwnPropertyNames( currentObj ) ) {
			propertyNames.add( name );
		}

		currentObj = Object.getPrototypeOf( currentObj );
	}

	return [ ...propertyNames ].map( ( key ) => [ key, obj[ key ] ] );
}

/**
 * Converts an object into a borderless table format.
 *
 * Example:
 *   objectToTable( {
 *     keyOne: 'value1',
 *     keyTwo: 'value2',
 *     keyThree: 3,
 *     fn: () => {},
 *     obj: {},
 *   } )
 *   // Returns:
 *   // 'key one   : value1\n' +
 *   // 'key two   : value2\n' +
 *   // 'key three : 3'
 *
 * @param {Object} obj Object to convert into a table
 * @param {Object} [extraOptions] Extra options for the table
 *
 * @return {string} Table string
 */
function objectToTable( obj = {}, extraOptions ) {
	const data = objectOwnPropertiesEntries( obj )
		.filter(
			( [ key, value ] ) =>
				typeof value !== 'function' && ! key.startsWith( '_' )
		)
		.map( ( [ key, value ] ) => [
			key
				.split( /(?=[A-Z0-9])/g )
				.map( ( part, i ) =>
					i === 0
						? part.charAt( 0 ).toUpperCase() + part.slice( 1 )
						: part.charAt( 0 ).toLowerCase() + part.slice( 1 )
				)
				.join( ' ' ),
			typeof value === 'object'
				? util.inspect( value, { colors: chalk.level > 0 } )
				: value,
		] );

	const options = {
		columns: [ { paddingLeft: 0 }, { paddingRight: 0 } ],
		border: getBorderCharacters( 'void' ), // No border, modified below.
		drawHorizontalLine: () => false,
	};
	options.border.bodyJoin = ':';

	// Hack for alignment with other tables.
	if ( extraOptions?.columns?.[ 0 ]?.minWidth ) {
		options.columns[ 0 ].width = Math.max(
			extraOptions.columns[ 0 ].minWidth,
			...data.map( ( [ key ] ) => key.length )
		);
	}

	return table( data, options ).slice( 0, -1 ); // Remove trailing newline.
}

/**
 * Generates a table in the following format.
 *
 * ╔═══════════════════════════════════════════════════╤═══════════════════════╗
 * ║ WARNING                                           │ Warning key 0 : value ║
 * ║ Theme : Example                                   │ Warning key 1 : value ║
 * ║ File  : style.css                                 │                       ║
 * ╟───────────────────────────────────────────────────┼───────────────────────╢
 * ║ ERROR                                             │ Error 0 key 0 : value ║
 * ║ Theme  : Example                                  │ Error 0 key 1 : value ║
 * ║ File   : theme.json                               │ Error 0 key 2 : value ║
 * ║ Schema : https://schemas.wp.org/wp/X.Y/theme.json ├───────────────────────╢
 * ║                                                   │ Error 1 key 0 : value ║
 * ║                                                   │ Error 1 key 1 : value ║
 * ║                                                   │ Error 1 key 2 : value ║
 * ╚═══════════════════════════════════════════════════╧═══════════════════════╝
 *
 * It has a very basic dynamic column width calculation where the first column
 * expands to the content and the second column uses the remaining width of the
 * terminal. Each column has a minimum width of 20 characters.
 *
 * @param {Problem[]} problems List of problems to format
 *
 * @return {string} Table string
 */
function problemsToTable( problems, options ) {
	const tableWidth = options.tableWidth || process.stdout.columns || 120;
	const paddingAndBorderWidth = '║  │  ║'.length;
	const columnMinWidth = 20;

	const userConfig = {
		columns: [
			{ width: columnMinWidth },
			{ width: tableWidth - columnMinWidth - paddingAndBorderWidth },
		],
		spanningCells: [],
	};
	const tableData = [];

	for ( const { type, theme, file, data, metadata } of problems ) {
		const metadataTable = metadata ? objectToTable( metadata ) : '';
		const titleTable = objectToTable(
			{ theme, file },
			{ columns: [ { minWidth: metadataTable.indexOf( ':' ) - 1 } ] }
		);

		const rows = data.map( ( m ) => [ '', objectToTable( m ) ] );
		rows[ 0 ][ 0 ] = [
			chalk[ type === 'warning' ? 'yellow' : 'red' ].bold(
				type.toUpperCase()
			),
			chalk.whiteBright( titleTable ),
			metadataTable,
		]
			.filter( Boolean )
			.join( '\n' );

		tableData.push( ...rows );

		userConfig.spanningCells.push( {
			row: tableData.length - rows.length,
			col: 0,
			rowSpan: rows.length,
		} );

		userConfig.columns[ 0 ].width = Math.max(
			userConfig.columns[ 0 ].width,
			...rows[ 0 ][ 0 ].split( '\n' ).map( ( s ) => s.length )
		);
		userConfig.columns[ 1 ].width = Math.max(
			columnMinWidth,
			tableWidth - userConfig.columns[ 0 ].width - paddingAndBorderWidth
		);
	}

	return table( tableData, userConfig ).slice( 0, -1 ); // Remove trailing newline.
}

function startProgress( length ) {
	if ( ! process.stdout.isTTY ) {
		return { increment() {} };
	}

	let current = 0;
	function render() {
		const [ progress, percentage ] = progressbar.filledBar(
			length,
			current
		);
		console.log(
			'\nProgress:',
			[ progress, Math.round( percentage * 100 ) / 100 ],
			`${ current }/${ length }\n`
		);
	}

	render();
	return {
		increment() {
			current++;
			process.stdout.moveCursor?.( 0, -3 );
			render();
		},
	};
}
