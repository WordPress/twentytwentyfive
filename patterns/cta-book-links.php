<?php
/**
 * Title: Call to action with book links
 * Slug: twentytwentyfive/cta-book-links
 * Categories: call-to-action, featured
 * Description: A call to action section with links to get the book in different websites.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center","align":"wide","fontSize":"x-large"} -->
	<h2 class="wp-block-heading alignwide has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Buy your copy of The Stories Book', 'twentytwentyfive' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:buttons {"align":"wide","fontSize":"medium","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
	<div class="wp-block-buttons alignwide has-custom-font-size has-medium-font-size">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Amazon', 'twentytwentyfive' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Audible', 'twentytwentyfive' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Barnes &amp; Noble', 'twentytwentyfive' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Apple Books', 'twentytwentyfive' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Bookshop.org', 'twentytwentyfive' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Spotify', 'twentytwentyfive' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'BAM!', 'twentytwentyfive' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Simon &amp; Schuster', 'twentytwentyfive' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

	<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
	<p class="has-text-align-center has-medium-font-size">
		<?php
		printf(
			/* Translators: %s: Example link with link text. */
			esc_html_e( 'Outside Europe? View %s.', 'twentytwentyfive' ),
			'<a href="#">international editions</a>'
		);
		?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
