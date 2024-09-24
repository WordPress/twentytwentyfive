<?php
/**
 * Title: Hero Centered Heading
 * Slug: twentytwentyfive/hero-centered-heading
 * Categories: banner, call-to-action, featured
 * Description: A hero with a centered heading, paragraph and button.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"dimensions":{"minHeight":"0vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="min-height:0vh;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40);">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign": "center", "className":"is-style-text-title"} -->
			<h2 class="wp-block-heading has-text-align-center is-style-text-title">Tell your story</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience, revealing hidden wonders.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
			<!-- /wp:button --></div>
		<!-- /wp:buttons -->
		</div>
	<!-- /wp:group -->
	</div>
<!-- /wp:group -->
