<?php
/**
 * Title: 404
 * Slug: twentytwentyfive/hidden-404
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-resized"} -->
			<figure class="wp-block-image size-large is-resized">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/image-from-rawpixel-id-13029755-jpeg.webp" alt="<?php echo esc_attr_x( 'Small totara tree on ridge above Long Point', 'image description', 'twentytwentyfive' ); ?>"/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"bottom","width":"60%","style":{"spacing":{"padding":{"left":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="padding-left:var(--wp--preset--spacing--40);flex-basis:60%">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
			<h3 class="wp-block-heading" style="font-style:normal;font-weight:500">
				<?php echo esc_html_x( 'Page not found', '404 error message', 'twentytwentyfive' ); ?>
			</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>
				<?php echo esc_html_x( 'The page you are looking for doesn\'t exist, or it has been moved. Please try searching using the form below.', '404 error message', 'twentytwentyfive' ); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:search {"label":"","placeholder":"<?php echo esc_attr_x( 'Type something...', 'input placeholder text', 'twentytwentyfive' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'button label', 'twentytwentyfive' ); ?>","style":{"border":{"radius":"50px","width":"1px"},"typography":{"fontSize":"18px"}},"borderColor":"opacity-20"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
