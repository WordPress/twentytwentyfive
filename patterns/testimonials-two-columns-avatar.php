<?php
/**
 * Title: Two columns with avatar
 * Slug: twentytwentyfive/testimonials-two-columns-avatar
 * Keywords: testimonial
 * Categories: testimonials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"64px"} -->
<div class="wp-block-column" style="flex-basis:64px"><!-- wp:image {"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/image-from-rawpixel-id-5918459.webp" alt="<?php echo esc_attr_x( 'Picture of a person', 'Alt text for testimonial image', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover;width:64px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:quote {"className":"is-style-plain","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"large"} -->
<blockquote class="wp-block-quote is-style-plain has-large-font-size" style="font-style:normal;font-weight:400"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"400px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1"}}} -->
<p style="line-height:1.1"><?php echo esc_html_x( '&ldquo;Superb product and customer service!&rdquo;', 'Sample testimonial', 'twentytwentyfive' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><cite><?php echo wp_kses_post( _x( 'Jo Mulligan <br /><sub>Atlanta, GA</sub>', 'Sample testimonial citation', 'twentytwentyfive' ) ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"64px"} -->
<div class="wp-block-column" style="flex-basis:64px"><!-- wp:image {"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/image-from-rawpixel-id-5918459.webp" alt="<?php echo esc_attr_x( 'Picture of a person', 'Alt text for testimonial image', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover;width:64px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:quote {"className":"is-style-plain","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"large"} -->
<blockquote class="wp-block-quote is-style-plain has-large-font-size" style="font-style:normal;font-weight:400"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"400px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1"}}} -->
<p style="line-height:1.1"><?php echo esc_html_x( '&ldquo;Amazing quality and care. I love all your products.&rdquo;', 'Sample testimonial', 'twentytwentyfive' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><cite><?php echo wp_kses_post( _x( 'Otto Reid <br><sub>Springfield, IL</sub>', 'Sample testimonial citation', 'twentytwentyfive' ) ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
