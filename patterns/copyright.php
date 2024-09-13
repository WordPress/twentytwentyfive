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
	"className":"copyright"
} -->
<p class="copyright"><?php echo esc_html_x( '&copy; Copyright date', 'placeholder', 'twentytwentyfive' ); ?></p>
<!-- /wp:paragraph -->
