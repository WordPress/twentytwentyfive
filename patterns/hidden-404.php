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
<!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"rowSpan":1,"columnSpan":2}}} -->
		<figure class="wp-block-image size-full">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/image-from-rawpixel-id-13029755-jpeg.webp" alt="<?php echo esc_attr_x( 'Small totara tree on ridge above Long Point', 'image description', 'twentytwentyfive' ); ?>" style="object-fit:cover" />
		</figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"bottom"} -->
	<div class="wp-block-column is-vertically-aligned-bottom">
		<!-- wp:group {"style":{"layout":{"columnSpan":7,"rowSpan":1}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
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

			<!-- wp:search {"label":"","placeholder":"<?php echo esc_attr_x( 'Type something...', 'input placeholder text', 'twentytwentyfive' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'button label', 'twentytwentyfive' ); ?>","style":{"border":{"radius":"50px","width":"1px"},"typography":{"fontSize":"18px"}},"backgroundColor":"contrast","borderColor":"opacity-20"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
