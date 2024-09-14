<?php
/**
 * Title: Cover with big heading
 * Slug: twentytwentyfive/cover-with-big-heading
 * Categories: banner, about, featured
 * Description: A cover section with an opinionated design.
 * Viewport width: 1400
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section-3","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-3" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">
		<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide"} -->
		<figure class="wp-block-image alignwide size-full">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coming-soon-bg-image.webp" alt="Photo of a field full of flowers, a blue sky and a tree." />
		</figure>
		<!-- /wp:image -->

		<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
		<div class="wp-block-group alignfull">
			<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"21vw","letterSpacing":"-0.02em","lineHeight":"1","fontWeight":"700"}}} -->
			<p class="has-text-align-left" style="font-size:21vw;font-weight:700;letter-spacing:-0.02em;line-height:1">Stories</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
