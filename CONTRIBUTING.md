# Contributing

## Tools

### Translation

```sh-session
$ node theme-utils.mjs help escape-patterns

escape-patterns [--domains=DOMAINS] <array of theme directories>

Escapes block patterns for pattern files.

--domains=DOMAINS

        Array of domains mapping to themes

```

### Validation

```sh-session
$ node theme-utils.mjs help validate-theme                    

validate-theme [--format=FORMAT] [--color=WHEN] [--table-width=COLUMNS] <array of theme slugs>

Validates a theme against the WordPress theme requirements.

--format=FORMAT

        Output format. Possible values: *table*, json, dir.

--color=WHEN

        Colorize the output for table or dir formats. The automatic mode only enables colors if 
        an interactive terminal is detected. Possible values: *auto*, always, never.

--table-width=COLUMNS

        Explicitly set the width of the table format instead of determining it automatically.
        Will default to 120 if omitted and width cannot be determined automatically.

```

Here's an example of the output.

<img width="828" alt="image" src="https://github.com/user-attachments/assets/987d6c2f-b993-4c16-b678-1757752ea820">

This is how you run validation on a single theme:

```sh-session
$ node theme-utils.mjs validate-theme grammer

Progress: [ '■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■', 100 ] 1/1

╔═════════════════════════════════════════════════════════════╤══════════════════════════╗
║ ERROR                                                       │ Message : missing 'Requi ║
║ Theme : Grammer                                             │ res at least' header met ║
║ File  : style.css                                           │ adata                    ║
╟─────────────────────────────────────────────────────────────┼──────────────────────────╢
║ WARNING                                                     │ Actual   : undefined     ║
║ Theme : Grammer                                             │ Expected : 5.9 or greate ║
║ File  : style.css                                           │ r                        ║
║                                                             │ Message  : the 'Requires ║
║                                                             │  at least' version does  ║
║                                                             │ not support theme.json   ║
╟─────────────────────────────────────────────────────────────┼──────────────────────────╢
║ WARNING                                                     │ Instance path : /setting ║
║ Theme  : Grammer                                            │ s/spacing/spacingScale   ║
║ File   : theme.json                                         │ Schema path   : #/defini ║
║ Schema : https://schemas.wp.org/trunk/theme.json            │ tions/settingsSpacingPro ║
║                                                             │ perties/properties/spaci ║
║                                                             │ ng/properties/spacingSca ║
║                                                             │ le/additionalProperties  ║
║                                                             │ Keyword       : addition ║
║                                                             │ alProperties             ║
║                                                             │ Params        : { additi ║
║                                                             │ onalProperty: 'theme' }  ║
║                                                             │ Message       : must NOT ║
║                                                             │ have additional properti ║
║                                                             │ es                       ║
╟─────────────────────────────────────────────────────────────┼──────────────────────────╢
║ WARNING                                                     │ Instance path :          ║
║ Theme  : Grammer                                            │ Schema path   : #/requir ║
║ File   : assets/fonts/font-collection.json                  │ ed                       ║
║ Schema : https://schemas.wp.org/wp/6.5/font-collection.json │ Keyword       : required ║
║                                                             │ Params        : { missin ║
║                                                             │ gProperty: 'slug' }      ║
║                                                             │ Message       : must hav ║
║                                                             │ e required property 'slu ║
║                                                             │ g'                       ║
║                                                             ├──────────────────────────╢
║                                                             │ Instance path :          ║
║                                                             │ Schema path   : #/requir ║
║                                                             │ ed                       ║
║                                                             │ Keyword       : required ║
║                                                             │ Params        : { missin ║
║                                                             │ gProperty: 'name' }      ║
║                                                             │ Message       : must hav ║
║                                                             │ e required property 'nam ║
║                                                             │ e'                       ║
╚═════════════════════════════════════════════════════════════╧══════════════════════════╝

Validation passed with warnings.
```

<img width="1728" alt="image" src="https://github.com/user-attachments/assets/68e38c35-224b-407c-8333-b4ac0b881fd8">

It works with pagers. This example shows how to match the table width to your terminal width inside a pager.

```sh-session
$ # You may need to wait a while for longer lists of themes.
$ node theme-utils.mjs validate-theme --color=always --table-width=$(( $(tput cols) )) atheme,adventurer,grammer,skatepark | less -R
```

The added `--format=json` option is super helpful when combined with [`jq`](https://jqlang.github.io/jq/download/) to drill down into the data.

This, for example, is the breakdown of all the current themes and a count of the types of problems that they have:

```sh-session
$ # Scroll to see the long command →
$ node theme-utils.mjs validate-theme --format=json $(find . -name 'theme.json' | awk -F/ '{print $2}' | uniq | sort | paste -s -d, -) | jq '.[].data[].message' | sort | uniq -c | sort -bgr
5815 "must NOT have additional properties"
 696 "must be object"
 551 "must be string"
 328 "the $schema version does not match style.css 'Requires at least' version"
 153 "must match exactly one schema in oneOf"
  73 "must be equal to constant"
  71 "the 'Requires at least' version does not support theme.json"
  71 "must be equal to one of the allowed values"
  47 "Missing $schema URI: undefined"
   6 "property name must be valid"
   5 "must be number"
   2 "must be >= 1"
   2 "missing 'Requires at least' header metadata"
   1 "must have required property 'version'"
   1 "must have required property 'slug'"
   1 "must have required property 'name'"
```
