<?php
/**
 * Title: Footer with newsletter signup
 * Slug: twentytwentyfive/footer-newsletter
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with large site title and newsletter signup
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
<!-- wp:site-title {"level":0,"style":{"typography":{"fontSize":"10vw"}}} /-->

	<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group" style="padding-right:0;padding-left:0">
		<!-- wp:paragraph {"fontSize":"x-large"} -->
		<p class="has-x-large-font-size">Subscribe to our newsletter</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Subscribe</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
	<!-- wp:spacer {"height":"20px"} -->
	<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /-->
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">Designed with <strong>WordPress</strong></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
