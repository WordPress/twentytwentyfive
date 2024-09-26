<?php
/**
 * Title: Contact Location and Link
 * Slug: twentytwentyfive/contact-location-and-link
 * Categories: banner, featured
 * Description: Contact section with a location address, a directions link, and an image of the location.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section-3","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull is-style-section-3" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"top","width":""} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
			<div class="wp-block-group" style="min-height:100%">
				<!-- wp:paragraph {"className":"is-style-text-subtitle"} -->
				<h2 class="is-style-text-subtitle">Visit us at 123 Example St. Manhattan, NY 10300, United States</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
				<p class="has-medium-font-size" style="text-transform:uppercase"><a href="#">Get directions</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":""} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","linkDestination":"none","className":"wp-block-image size-large"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/location.webp" alt="The business location" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
