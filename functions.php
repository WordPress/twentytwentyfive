<?php
/**
 * Twenty Twenty-Five functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

/**
 * Enqueue editor-style.css in the editors.
 */
if ( ! function_exists( 'twentytwentyfive_editor_style' ) ) :
	/**
	 * Enqueue editor-style.css in the editors.
	 *
	 * @since Twenty Twenty-Five 1.0
	 * @return void
	 */
	function twentytwentyfive_editor_style() {
		add_editor_style( get_parent_theme_file_uri( 'assets/css/editor-style.css' ) );
	}
endif;

add_action( 'after_setup_theme', 'twentytwentyfive_editor_style' );

/**
 * Enqueue style.css on the front.
 */
if ( ! function_exists( 'twentytwentyfive_enqueue_styles' ) ) :
	/**
	 * Enqueue style.css on the front.
	 *
	 * @since Twenty Twenty-Five 1.0
	 * @return void
	 */
	function twentytwentyfive_enqueue_styles() {
		wp_enqueue_style(
			'twentytwentyfive-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' ),
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'twentytwentyfive_enqueue_styles' );

/**
 * Enqueue custom block stylesheets.
 */
if ( ! function_exists( 'twentytwentyfive_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets.
	 *
	 * @since Twenty Twenty-Five 1.0
	 * @return void
	 */
	function twentytwentyfive_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfive-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfive_block_stylesheets' );

/**
 * Register custom block styles.
 */
if ( ! function_exists( 'twentytwentyfive_block_styles' ) ) :
	/**
	 * Register custom block styles.
	 *
	 * @since Twenty Twenty-Five 1.0
	 * @return void
	 */
	function twentytwentyfive_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfive' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfive_block_styles' );

/**
 * Register pattern categories.
 */
if ( ! function_exists( 'twentytwentyfive_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Five 1.0
	 * @return void
	 */
	function twentytwentyfive_pattern_categories() {

		register_block_pattern_category(
			'twentytwentyfive_page',
			array(
				'label'       => __( 'Pages', 'twentytwentyfive' ),
				'description' => __( 'A collection of full page layouts.', 'twentytwentyfive' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfive_pattern_categories' );

/**
 * Register block binding sources.
 */
if ( ! function_exists( 'twentytwentyfive_register_block_bindings' ) ) :
	/**
	 * Register the copyright block binding source.
	 *
	 * @since Twenty Twenty-Five 1.0
	 * @return void
	 */
	function twentytwentyfive_register_block_bindings() {
		register_block_bindings_source(
			'twentytwentyfive/copyright',
			array(
				'label'              => __( 'Copyright', 'twentytwentyfive' ),
				'get_value_callback' => 'twentytwentyfive_copyright_binding',
			)
		);
	}
endif;

/**
 * Register block binding callback function for the copyright.
 */
if ( ! function_exists( 'twentytwentyfive_copyright_binding' ) ) :
	/**
	 * Callback function for the copyright block binding source.
	 *
	 * @since Twenty Twenty-Five 1.0
	 * @return string Copyright text.
	 */
	function twentytwentyfive_copyright_binding() {
		$copyright_text = sprintf(
			/* translators: 1: Copyright symbol or word, 2: Year */
			esc_html( '%1$s %2$s', 'twentytwentyfive' ),
			'&copy;',
			wp_date( 'Y' ),
		);

		return $copyright_text;
	}
endif;

add_action( 'init', 'twentytwentyfive_register_block_bindings', 9 );
