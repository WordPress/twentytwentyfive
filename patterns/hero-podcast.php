<?php
/**
 * Title: Hero podcast
 * Slug: twentytwentyfive/hero-podcast
 * Categories: featured, hero
 * Keywords: podcast, hero, stories
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-1" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-podcast.webp" alt="<?php echo esc_attr_x( 'Picture of a person', 'Alt text for hero image', 'twentytwentyfive' ); ?>"/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:heading -->
			<h2 class="wp-block-heading">The Stories Podcast</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}}} -->
			<p style="padding-top:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Storytelling, expert analysis, and vivid descriptions. The Stories Podcast brings history to life, making it accessible and engaging for a global audience.', 'Podcast description', 'twentytwentyfive' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}},"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size" style="padding-top:var(--wp--preset--spacing--30)"><strong><?php echo esc_html_x( 'Subscribe on your favorite platform', 'Subscription heading', 'twentytwentyfive' ); ?></strong></h3>
			<!-- /wp:heading -->

			<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"small","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons has-custom-font-size has-small-font-size">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Youtube', 'Button text', 'twentytwentyfive' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Apple Podcasts', 'Button text', 'twentytwentyfive' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Spotify', 'Button text', 'twentytwentyfive' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Pocket Casts', 'Button text', 'twentytwentyfive' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'RSS', 'Button text', 'twentytwentyfive' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
