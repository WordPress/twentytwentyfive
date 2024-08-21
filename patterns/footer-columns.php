<?php
/**
 * Title: Footer with columns
 * Slug: twentytwentyfive/footer-columns
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer columns with title, tagline and links
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- wp:site-title {"level":2,"fontSize":"xx-large"} /-->
			<!-- wp:site-tagline /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-right:0;padding-left:0">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
				<h3 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:700">Stories</h3>
				<!-- /wp:heading -->
				<!-- wp:navigation {"overlayMenu":"never","fontSize":"small","layout":{"type":"flex","orientation":"vertical"},"ariaLabel":"<?php esc_attr_e( 'Stories', 'twentytwentyfive' ); ?>"} -->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'twentytwentyfive' ); ?>","url":"#"} /-->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'twentytwentyfive' ); ?>","url":"#"} /-->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'FAQs', 'twentytwentyfive' ); ?>","url":"#"} /-->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Authors', 'twentytwentyfive' ); ?>","url":"#"} /-->
				<!-- /wp:navigation -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-right:0;padding-left:0">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
				<h3 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:700">Featured</h3>
				<!-- /wp:heading -->
				<!-- wp:navigation {"overlayMenu":"never","fontSize":"small","layout":{"type":"flex","orientation":"vertical"},"ariaLabel":"<?php esc_attr_e( 'Featured', 'twentytwentyfive' ); ?>"} -->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Example.com', 'twentytwentyfive' ); ?>","url":"#"} /-->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Shop', 'twentytwentyfive' ); ?>","url":"#"} /-->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Patterns', 'twentytwentyfive' ); ?>","url":"#"} /-->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Themes', 'twentytwentyfive' ); ?>","url":"#"} /-->
				<!-- /wp:navigation -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /-->
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">Designed with <strong>WordPress</strong></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
