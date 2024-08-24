<?php
/**
 * Title: About Details Description
 * Slug: twentytwentyfive/about-details-description
 * Categories: text, about, columns
 * Description: About Details Description With Bullet.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"verticalAlignment":"top","width":"45%"} -->
        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:45%">
            <!-- wp:heading {"level":3,"fontSize":"x-large"} -->
            <h3 class="wp-block-heading has-x-large-font-size">
                <?php esc_html_e( 'Let’s hear about history and ancestry', 'twentytwentyfive' ); ?>
            </h3>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"small","textTransform":"uppercase"}}} -->
            <p class="has-primary-color has-small-font-size" style="text-transform:uppercase">
                <?php esc_html_e( 'What will happen at “Stories, historias, iсторії, iστορίες”:', 'twentytwentyfive' ); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:list {"fontSize":"small"} -->
            <ul class="wp-block-list has-small-font-size">
                <!-- wp:list-item -->
                <li><?php esc_html_e( 'Opportunity to learn from master photographers and historians', 'twentytwentyfive' ); ?></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><?php esc_html_e( 'A series of exhibitions, workshops, and panel discussions', 'twentytwentyfive' ); ?></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><?php esc_html_e( 'Participants engage in hands-on activities that not only enhance their technical skills but also deepen their understanding of the cultural and historical contexts of the photographs', 'twentytwentyfive' ); ?></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><?php esc_html_e( 'Panel discussions feature experts from various fields, including historians, anthropologists, and photographers, who explore the themes of memory, identity, and storytelling', 'twentytwentyfive' ); ?></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><?php esc_html_e( 'Open conversations that delve into how photography can bridge cultural divides', 'twentytwentyfive' ); ?></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
