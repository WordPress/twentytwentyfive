<?php
/**
 * Title: Instagram grid
 * Slug: twentytwentyfive/instagram-grid
 * Categories: media, featured
 * Description: A grid section with photos and a link to an Instagram profile.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"className":"is-style-section-3","layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-section-3">
			<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
			<div class="wp-block-group" style="min-height:100%">
				<!-- wp:heading {"fontSize":"large"} -->
				<h2 class="wp-block-heading has-large-font-size">Instagram</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
				<p class="has-text-align-center has-medium-font-size">@<a href="#">example</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ig-grid-image-1.webp" alt="Photo of a field full of flowers, a blue sky and a tree." style="aspect-ratio:1;object-fit:cover"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ig-grid-image-2.webp" alt="Profile portrait of a native person." style="aspect-ratio:1;object-fit:cover"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ig-grid-image-3.webp" alt="View of the deep ocean." style="aspect-ratio:1;object-fit:cover"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ig-grid-image-4.webp" alt="A native New Zealander on a small boat at the beach." style="aspect-ratio:1;object-fit:cover"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ig-grid-image-5.webp" alt="The acropolis in Athens." style="aspect-ratio:1;object-fit:cover"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ig-grid-image-6.webp" alt="Close up of two flowers on a dark background." style="aspect-ratio:1;object-fit:cover"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ig-grid-image-7.webp" alt="Birds on a lake." style="aspect-ratio:1;object-fit:cover"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
