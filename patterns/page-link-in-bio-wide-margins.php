<?php
/**
 * Title: Link in bio with profile, links and wide margins
 * Slug: twentytwentyfive/page-link-in-bio-wide-margins
 * Categories: twentytwentyfive_page, banner, about, featured
 * Keywords: starter
 * Block Types: core/post-content
 * Viewport width: 1400
 * Inserter: no
 * Description: A link in bio landing page with social links, a profile photo and a brief description.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section-5","style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-5" style="min-height:100vh;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":{"topLeft":"150px","bottomRight":"150px"}}}} -->
			<figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cv-bio.webp" alt="Portrait of a woman." style="border-top-left-radius:150px;border-bottom-right-radius:150px;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"left"} -->
				<h2 class="wp-block-heading has-text-align-left">Gail Falk Seltzer</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>I’m Gail, a passionate and Staff Lawyer. Based in Charleston. I’m a graduate of Yale University.</p>
				<!-- /wp:paragraph -->

				<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#111111","className":"is-style-logos-only"} -->
				<ul class="wp-block-social-links has-icon-color is-style-logos-only">
					<!-- wp:social-link {"url":"#","service":"x"} /-->

					<!-- wp:social-link {"url":"#","service":"instagram"} /-->

					<!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
