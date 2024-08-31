<?php
/**
 * Title: Heading and paragraph with image on the right
 * Slug: twentytwentyfive/heading-and-paragraph-with-image
 * Categories: text, about
 * Description: A two-column section with a heading and paragraph on the left, and an image on the right.
 * 
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"var:preset|spacing|50","left":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--80)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:heading {"level":3,"className":"wp-block-heading has-base-color has-text-color"} -->
            <h3 class="wp-block-heading has-base-color has-text-color">
                <?php esc_html_e( 'About the Event', 'twentytwentyfive' ); ?>
            </h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
            <p class="has-base-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Held over a weekend, the event is structured around a series of exhibitions, workshops, and panel discussions. The exhibitions showcase a curated selection of photographs that tell compelling stories from various corners of the globe, each image accompanied by detailed narratives that provide context and deeper insight into the historical significance of the scenes depicted. These photographs are drawn from the archives of renowned photographers, as well as emerging talents, ensuring a blend of both classical and contemporary perspectives.', 'Event Overview Text', 'twentytwentyfive' );
                ?>
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

       <!-- wp:column {"verticalAlignment":"center","width":"50%","layout":{"type":"default"}} -->
            <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full"} -->
            <figure class="wp-block-image size-full">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/image-from-rawpixel-id-8803077-original.webp' ); ?>" alt="<?php echo esc_attr_x( 'A classic black and white photo of an old church', 'Alt text for Overview picture', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover" />
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
