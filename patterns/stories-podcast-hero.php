<?php
/**
 * Title: Stories Podcast Hero
 * Slug: twentytwentyfive/stories-podcast-hero
 * Categories: featured, hero
 * Keywords: podcast, hero, stories
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */
?>

<!-- wp:group {"align":"full","className":"has-accent-2-background-color has-background","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"backgroundColor":"accent-2"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large">
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/podcast-hero.webp' ) ); ?>" alt="<?php echo esc_attr_x( 'Picture of a person', 'Podcast Hero Image', 'twentytwentyfive' ); ?>"/>
		</figure>
		<!-- /wp:image -->
		</div>

		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size">The Stories® Podcast</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size">Storytelling, expert analysis, and vivid descriptions. The Stories® Podcast brings history to life, making it accessible and engaging for a global audience.</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Subscribe on your favorite platform</h3>
			<!-- /wp:heading -->

			<!-- wp:buttons {"fontSize":"x-small","layout":{"type":"flex","justifyContent":"left"}} -->
				<div class="wp-block-buttons has-custom-font-size has-x-small-font-size"><!-- wp:button {"className":"is-style-outline","fontSize":"extra-small"} -->
				<div class="wp-block-button has-custom-font-size is-style-outline has-extra-small-font-size"><a class="wp-block-button__link wp-element-button">Youtube</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","fontSize":"extra-small"} -->
				<div class="wp-block-button has-custom-font-size is-style-outline has-extra-small-font-size"><a class="wp-block-button__link wp-element-button">Apple Podcasts</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","fontSize":"extra-small"} -->
				<div class="wp-block-button has-custom-font-size is-style-outline has-extra-small-font-size"><a class="wp-block-button__link wp-element-button">Spotify</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","fontSize":"extra-small"} -->
				<div class="wp-block-button has-custom-font-size is-style-outline has-extra-small-font-size"><a class="wp-block-button__link wp-element-button">Pocket Casts</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","fontSize":"extra-small"} -->
				<div class="wp-block-button has-custom-font-size is-style-outline has-extra-small-font-size"><a class="wp-block-button__link wp-element-button">RSS</a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
