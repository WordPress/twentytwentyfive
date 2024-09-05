<?php
/**
 * Title: CV/Bio
 * Slug: twentytwentyfive/cv-bio
 * Categories: about
 * Description: A pattern for a CV/Bio landing page.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:cover {"overlayColor":"base","isUserOverlayColor":true,"isDark":false,"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
	<span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-100 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"65%"} -->
			<div class="wp-block-column" style="flex-basis:65%">
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"22rem","letterSpacing":"-0.03em"}}} -->
					<p class="has-text-align-left" style="font-size:22rem;letter-spacing:-0.03em">Hey,</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large"} -->
					<p class="has-x-large-font-size" style="line-height:1.2">My name is Gail Falk Seltzer and I’m a passionate and Staff Lawyer. Based in Charleston, West Virginia, I have made significant contributions to labor rights and public health advocacy. A graduate of Yale University, I am proud to have played a key role in drafting the Equal Rights Amendment, reflecting my commitment to gender equality and labor justice. My work has been instrumental in securing better conditions and benefits for miners, showcasing my unwavering dedication to protecting the rights and well-being of America’s labor force.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"35%"} -->
			<div class="wp-block-column" style="flex-basis:35%">
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cv-bio.webp" alt="Portrait of a woman." style="aspect-ratio:3/4;object-fit:cover"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"align":"right","style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large"} -->
					<p class="has-text-align-right has-x-large-font-size" style="line-height:1.2"><a href="#">Instagram</a><br><a href="#">LinkedIn</a><br><a href="#">Now</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
	<!-- /wp:columns -->
	</div>
</div>
<!-- /wp:cover -->
