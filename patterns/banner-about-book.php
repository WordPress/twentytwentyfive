<?php
/**
 * Title: Banner with book description
 * Slug: twentytwentyfive/banner-about-book
 * Categories: banner, call-to-action, featured
 * Description: Banner with book description and accompanying image for promotion.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"12%"} -->
					<div class="wp-block-column" style="flex-basis:12%"></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"88%"} -->
				<div class="wp-block-column" style="flex-basis:88%">
					<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"500px","justifyContent":"left"}} -->
					<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--50)">
						<!-- wp:heading {"level":3,"className":"wp-block-heading","fontSize":"x-large"} -->
						<h3 class="wp-block-heading has-x-large-font-size">About the book</h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"fontSize":"medium"} -->
						<p class="has-medium-font-size">This exquisite compilation showcases a diverse array of photographs that capture the essence of different eras and cultures, reflecting the unique styles and perspectives of each artist. Fleckenstein’s evocative imagery, Strand’s groundbreaking modernist approach, and Kōno’s meticulous documentation of Japanese life come together in a harmonious blend that celebrates the art of photography. Each image in “The Stories Book” is accompanied by insightful commentary, providing historical context and revealing the stories behind the photographs. This collection is not only a visual feast but also a tribute to the power of photography to preserve and narrate the multifaceted experiences of humanity.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%","layout":{"type":"default"}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-image-landing.webp" alt="Image of a book" style="aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
