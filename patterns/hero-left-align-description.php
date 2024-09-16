<?php
/**
 * Title: Hero Left Align Description
 * Slug: twentytwentyfive/hero-left-align-description
 * Categories: banner, call-to-action, featured
 * Description: A hero with a left align description.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>

<!-- wp:group {"metadata":{"categories":["featured"],"patternName":"twentytwentyfive/hero-left-align-description","name":"Hero Left Align Description"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"0vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="min-height:0vh;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide"} -->
    <h1 class="wp-block-heading alignwide has-text-align-left">
        <?php echo esc_html_x( 'We\'re', 'Heading start for description', 'twentytwentyfive' ); ?>
        <strong><?php echo esc_html_x( 'Fleurs', 'Heading emphasis for description', 'twentytwentyfive' ); ?></strong>
        <?php echo esc_html_x( ', our mission is to deliver exquisite flower arrangements that not only adorn living spaces but also inspire a deeper appreciation for natural beauty.', 'Heading end for description', 'twentytwentyfive' ); ?>
    </h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->