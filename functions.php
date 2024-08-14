<?php
/**
 * Twenty Twenty-Five functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Five
 * @since Twenty Twenty-Five 1.0
 */

add_action( 'init', 'twentytwentyfive_register_block_bindings', 9 );

function twentytwentyfive_register_block_bindings() {
	 register_block_bindings_source(
		'twentytwentyfive/copyright',
		array(
			'label'              => __( 'Copyright', 'twentytwentyfive' ),
			'get_value_callback' => 'twentytwentyfive_copyright_binding'
		)
	);
}

function twentytwentyfive_copyright_binding() {
	/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
	$date_format = _x( 'Y', 'copyright date format', 'twentytwentyfive' );
	/* translators: 1: Copyright symbol or word, 2: Date, 3: Site title */
	$copyright_text = sprintf(
		__( '%1$s %2$s %3$s', 'twentytwentyfive' ),
		'&copy;',
		wp_date( $date_format ),
		get_bloginfo( 'name' )
	);

	return $copyright_text;
}
