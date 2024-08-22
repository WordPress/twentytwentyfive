<?php
/**
 * Twenty Twenty-Five functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Five
 * @since Twenty Twenty-Five 1.0
 */

/**
 * Enqueue editor-style.css in the editors.
 */
function twentytwentyfive_editor_style() {
	add_editor_style( get_parent_theme_file_uri( 'editor-style.css' ) );
}
add_action( 'after_setup_theme', 'twentytwentyfive_editor_style' );

/**
 * Enqueue stylesheet.css on the front.
 */
function twentytwentyfive_enqueue_styles() {
	wp_enqueue_style(
		'twenty-twenty-five-style',
		get_parent_theme_file_uri( 'style.css' ),
		array(),
		wp_get_theme()->get( 'Version' ),
	);
}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_five_enqueue_styles' );
