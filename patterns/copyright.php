<?php
/**
 * Title: Copyright symbol and date
 * Slug: twentytwentyfive/copyright
 * Categories: text
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:paragraph {
	"metadata":{
		"bindings":{
			"content":{
				"source":"twentytwentyfive/copyright"
			}
		}
	},
	"className":"copyright",
	"textColor":"primary",
	"fontSize":"small"
} -->
<p class="copyright has-primary-color has-text-color has-small-font-size"><?php echo esc_html_x( '&copy; Copyright date', 'placeholder', 'twentytwentyfive' ); ?></p>
<!-- /wp:paragraph -->
