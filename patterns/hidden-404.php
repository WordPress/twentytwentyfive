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

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
        <!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%">
            <!-- wp:image {"width":"524px","height":"670px","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large is-resized">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/image-from-rawpixel-id-13029755-jpeg.webp" alt="<?php echo esc_attr_x( 'Small totara tree on ridge above Long Point', 'image description', 'twentytwentyfive' ); ?>" class="" style="aspect-ratio:2/3;object-fit:cover"/>
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
        <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%">
            <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-large"} -->
            <h1 class="wp-block-heading has-x-large-font-size" style="font-style:normal;font-weight:500">
                <?php echo esc_html_x( 'Page not found', '404 error message', 'twentytwentyfive' ); ?>
            </h1>
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
