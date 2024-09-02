<?php
/**
 * Title: Pricing two columns
 * Slug: twentytwentyfive/cta-pricing
 * Categories: call-to-action, featured
 * Viewport width: 1400
 * Description: A pricing section with a title, a paragraph and two pricing levels.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:heading {"textAlign":"center","align":"wide"} -->
		<h2 class="wp-block-heading alignwide has-text-align-center">Pricing</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">These are our membership options. You can cancel or pause anytime.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"bottom":"0"},"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","top":"0","bottom":"0"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--80);padding-bottom:0;padding-left:var(--wp--preset--spacing--80)">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"width":"1px","color":"var:preset|color|opacity-20","radius":"10px"}}} -->
		<div class="wp-block-column has-border-color" style="border-color:var(--wp--preset--color--opacity-20);border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading" id="free">Free</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"large"} -->
			<p class="has-primary-color has-text-color has-link-color has-large-font-size">0€</p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"is-style-checkmark-list","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small"} -->
			<ul style="padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)" class="wp-block-list has-small-font-size is-style-checkmark-list">
				<!-- wp:list-item -->
				<li>Get access to our paid articles and weekly newsletter.</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li>Join our IRL events.</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li>Get a free tote bag.</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li>An elegant addition of home decor collection.</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li>Join our forums.</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"width":100} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button">Join</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"width":"1px","color":"var:preset|color|opacity-20","radius":"10px"}},"layout":{"type":"default"}} -->
		<div class="wp-block-column has-border-color" style="border-color:var(--wp--preset--color--opacity-20);border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading" id="single">Single</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size">20€/month</p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"is-style-checkmark-list","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"fontSize":"small"} -->
			<ul style="padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)" class="wp-block-list has-small-font-size is-style-checkmark-list">
				<!-- wp:list-item -->
				<li>Get access to our paid articles and weekly newsletter.</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li>Join our IRL events.</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li>Get a free tote bag.</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li>An elegant addition of home decor collection.</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li>Join our forums.</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"width":100} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button">Join</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
