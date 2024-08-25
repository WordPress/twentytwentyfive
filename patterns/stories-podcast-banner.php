<?php
/**
 * Title: Stories Podcast Hero
 * Slug: twentytwentyfive/stories-podcast-hero
 * Categories: featured, hero
 * Keywords: podcast, hero, stories
 *
 * @package TwentyTwentyFive
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"backgroundColor":"accent-2"},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-accent-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:image {"width":"360px","height":"360px","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
			<figure class="wp-block-image size-large is-resized" style="border-radius:20px">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/image-from-rawpixel-id-14264288-jpeg.webp' ) ); ?>" alt="Historical figure" style="width:360px;height:360px;object-fit:cover" />
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:heading {"level":1,"fontSize":"xxx-large"} -->
			<h2 class="wp-block-heading has-xxx-large-font-size">The Stories® Podcast</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size">Storytelling, expert analysis, and vivid descriptions. The Stories® Podcast brings history to life, making it accessible and engaging for a global audience.</p>
				<!-- /wp:paragraph -->

			<!-- wp:heading {"level":6} -->
			<h6 class="wp-block-heading">Subscribe on your favorite platform</h6>
			<!-- /wp:heading -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline","fontSize":"extra-small","size":"extra-small"} -->
				<div class="wp-block-button has-extra-small-font-size is-style-outline"><a class="wp-block-button__link wp-element-button">Youtube</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","fontSize":"extra-small","size":"extra-small"} -->
				<div class="wp-block-button has-extra-small-font-size is-style-outline"><a class="wp-block-button__link wp-element-button">Apple Podcasts</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","fontSize":"extra-small","size":"extra-small"} -->
				<div class="wp-block-button has-extra-small-font-size is-style-outline"><a class="wp-block-button__link wp-element-button">Spotify</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","fontSize":"extra-small","size":"extra-small"} -->
				<div class="wp-block-button has-extra-small-font-size is-style-outline"><a class="wp-block-button__link wp-element-button">Pocket Casts</a></div>
				<!-- /wp:button -->

					<!-- wp:button {"className":"is-style-outline","fontSize":"extra-small","size":"extra-small"} -->
				<div class="wp-block-button has-extra-small-font-size is-style-outline"><a class="wp-block-button__link wp-element-button">RSS</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
