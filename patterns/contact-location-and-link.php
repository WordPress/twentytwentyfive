<?php
/**
 * Title: Contact Location and Link
 * Slug: twentytwentyfive/contact-location-and-link
 * Categories: banner, call-to-action, featured
 * Description: A contact section with a location and a link to get directions.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"accent-1","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignfull has-accent-1-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"top","width":""} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
			<div class="wp-block-group" style="min-height:100%">
				<!-- wp:heading {"level":3,"className":"wp-block-heading"} -->
				<h3 class="wp-block-heading">Visit us at 123 Example St. Manhattan, NY 10300, United States</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
				<p class="has-small-font-size" style="text-transform:uppercase"><a href="#">Get directions</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","linkDestination":"none","className":"wp-block-image size-large is-style-default"} -->
			<figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/location.webp" alt="The business location" /></figure>
			<!-- /wp:image --></div>
		<!-- /wp:column -->
		</div>
	<!-- /wp:columns -->
	</div>
<!-- /wp:group -->
