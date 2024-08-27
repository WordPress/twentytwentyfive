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
 * Add theme support for post formats.
 *
 * @since Twenty Twenty-Five 1.0
 * @return void
 */
function twentytwentyfive_post_format_setup() {
	add_theme_support( 'post-formats', array( 'gallery', 'quote', 'link', 'audio', 'video' ) );
}
add_action( 'after_setup_theme', 'twentytwentyfive_post_format_setup' );

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
