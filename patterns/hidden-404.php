<?php
/**
 * Title: 404
 * Slug: twentytwentyfive/hidden-404
 * Inserter: no
 */
?>

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px","left":"50px","right":"50px"},"blockGap":{"left":"22px"}}}} -->
<div class="wp-block-columns" style="padding-top:50px;padding-right:50px;padding-bottom:50px;padding-left:50px"><!-- wp:column {"width":"40%"} -->
    <div class="wp-block-column" style="flex-basis:40%"><!-- wp:image {"id":17,"width":"524px","height":"670px","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/image-from-rawpixel-id-13029755-jpeg.webp" alt="" class="" style="object-fit:cover;width:524px;height:670px" /></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
    <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-large"} -->
        <h1 class="wp-block-heading has-x-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x('Page not found', 'twentytwentyfive') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"22px"}}} -->
        <p style="font-size:22px"><?php echo esc_html_x('The page are you looking for doesn\'t exist, or it has been moved. Please try searching using the form below.', 'twentytwentyfive') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:search {"label":"","placeholder":"<?php echo esc_attr_x('Type something...', '')?>","buttonText":"<?php echo esc_attr_x('Search', 'twentytwentyfive')?>","style":{"border":{"radius":"50px","color":"#12121224","width":"1px"},"typography":{"fontSize":"18px"}}} /-->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->
