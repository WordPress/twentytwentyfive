<?php
/**
 * Title: Hero book
 * Slug: twentytwentyfive/hero-book
 * Categories: featured, hero
 * Keywords: podcast, hero, stories
 * Description: A hero section for the book with a description and pre-order link.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"800px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="min-height:800px">
	<!-- wp:columns {"align":"full"} -->
	<div class="wp-block-columns alignfull">
		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">
			<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-image-landing.webp","dimRatio":0,"customOverlayColor":"#6b6b6b","isUserOverlayColor":true,"minHeight":800,"minHeightUnit":"px","isDark":false,"style":{"dimensions":{"aspectRatio":"1"}},"layout":{"type":"default"}} -->
			<div class="wp-block-cover is-light" style="min-height:800px">
				<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#6b6b6b"></span>
				<img class="wp-block-cover__image-background" alt="Image of the book" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-image-landing.webp" data-object-fit="cover"/>
				<div class="wp-block-cover__inner-container">
					<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
					<p class="has-text-align-center has-large-font-size"></p>
					<!-- /wp:paragraph -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"515px","justifyContent":"left"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:heading {"fontSize":"xx-large"} -->
				<h2 class="wp-block-heading has-xx-large-font-size">The Stories Book</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"large"} -->
				<p class="has-large-font-size" style="font-style:normal;font-weight:300">A fine collection of moments in time featuring photographs from Louis Fleckenstein, Paul Strand and Asahachi Kōno.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"medium"} -->
				<p class="has-medium-font-size">Available for pre-order now.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
