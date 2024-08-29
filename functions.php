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
 *
 * @since Twenty Twenty-Five 1.0
 * @return void
 */
function twentytwentyfive_editor_style() {
	add_editor_style( get_parent_theme_file_uri( 'assets/css/editor-style.css' ) );
}
add_action( 'after_setup_theme', 'twentytwentyfive_editor_style' );

/**
 * Enqueue stylesheet.css on the front.
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
add_action( 'wp_enqueue_scripts', 'twentytwentyfive_enqueue_styles' );

/**
 * Enqueue custom block stylesheets
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
			'handle' => 'twentytwentyfour-button-style-outline',
			'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
			'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
			'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
		)
	);
}
add_action( 'init', 'twentytwentyfive_block_stylesheets' );
