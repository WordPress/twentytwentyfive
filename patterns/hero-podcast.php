<?php
/**
 * Title: Hero Podcast
 * Slug: twentytwentyfive/hero-podcast
 * Categories: banner, call-to-action, featured
 * Description: A hero two column, image, heading, paragraph and buttons.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}},"backgroundColor":"accent-2"} -->
	<div class="wp-block-columns alignwide has-accent-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/image-from-rawpixel-id-14264288-jpeg.webp" alt="Image for Podcast" style="aspect-ratio:1;object-fit:cover" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
			<!-- wp:heading -->
			<h2 class="wp-block-heading">The Stories Podcast</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Storytelling, expert analysis, and vivid descriptions, The Stories Porcast brings history to life, making it accessible and engaging for a global audience.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><strong>Subcribe on your favourite platform</strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"0","bottom":"0"}},"border":{"radius":"10px"}},"fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link wp-element-button" style="border-radius:10px;padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)">YouTube</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"0","bottom":"0"}},"border":{"radius":"10px"}},"fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link wp-element-button" style="border-radius:10px;padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)">Apple Store</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"0","bottom":"0"}},"border":{"radius":"10px"}},"fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link wp-element-button" style="border-radius:10px;padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)">Spotify</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"0","bottom":"0"}},"border":{"radius":"10px"}},"fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link wp-element-button" style="border-radius:10px;padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)">Pocket Casts</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"0","bottom":"0"}},"border":{"radius":"10px"}},"fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link wp-element-button" style="border-radius:10px;padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)">RSS</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->