<?php
/**
 * Title: Copyright symbol, date and site title
 * Slug: twentytwentyfive/copyright
 * Categories: text
 *
 * @package Twenty Twenty-Five
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
