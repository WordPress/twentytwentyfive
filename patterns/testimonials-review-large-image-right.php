<?php
/**
 * Title: Review with large image on right
 * Slug: twentytwentyfive/testimonials-review-large-image-right
 * Keywords: testimonial
 * Categories: testimonials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"wrap","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"className":"is-style-capsule","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"x-small"} -->
<h2 class="wp-block-heading is-style-capsule has-x-small-font-size"><?php echo esc_html_x( 'What people are saying', 'Testimonial heading', 'twentytwentyfive' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:quote {"className":"is-style-plain","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
<blockquote class="wp-block-quote is-style-plain"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"400px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1"}},"fontSize":"x-large"} -->
<p class="has-x-large-font-size" style="line-height:1.1"><?php echo esc_html_x( '&ldquo;Superb product and customer service!&rdquo;', 'Sample testimonial', 'twentytwentyfive' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><cite><?php echo wp_kses_post( _x( 'Jo Mulligan <br /><sub>Atlanta, GA</sub>', 'Sample testimonial citation', 'twentytwentyfive' ) ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/3906400735_8f0fa9231d_o.webp" alt="<?php echo esc_attr_x( 'Picture of a person', 'Alt text for testimonial image', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
