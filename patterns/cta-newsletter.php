<?php
/**
 * Title: Newsletter sign-up
 * Slug: twentytwentyfive/cta-newsletter
 * Keywords: call-to-action, newsletter
 * Categories: call-to-action
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:cover {"tagName":"aside","overlayColor":"accent-1","isUserOverlayColor":true,"minHeight":460,"isDark":false,"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<aside class="wp-block-cover alignfull is-light" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:460px"><span aria-hidden="true" class="wp-block-cover__background has-accent-1-background-color has-background-dim-100 has-background-dim"></span>
<div class="wp-block-cover__inner-container">
	<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php echo esc_html_x( 'Sign up to get daily stories', 'Newsletter pattern sample text', 'twentytwentyfive' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php echo wp_kses_post( _x( 'Get access to a curated collection of moments in time featuring<br>photographs from historical relevance.', 'Newsletter pattern sample text', 'twentytwentyfive' ) ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"textAlign":"center"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php echo esc_html_x( 'Subscribe', 'Newsletter pattern sample text', 'twentytwentyfive' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
</aside>
<!-- /wp:cover -->
