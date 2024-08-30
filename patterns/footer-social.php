<?php
/**
 * Title: Centered Footer with social links
 * Slug: twentytwentyfive/footer-social
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with centered site title and social links
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:site-title {"level":2,"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-large"} /-->
		<!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-large","layout":{"type":"flex","justifyContent":"center"},"ariaLabel":"<?php esc_attr_e( 'Social', 'twentytwentyfive' ); ?>"} -->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Facebook', 'twentytwentyfive' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Instagram', 'twentytwentyfive' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'X', 'twentytwentyfive' ); ?>","url":"#"} /-->
		<!-- /wp:navigation -->
		<!-- wp:spacer {"height":"20px"} -->
		<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
		<p class="has-text-align-center has-x-small-font-size">Designed with <strong>WordPress</strong></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
