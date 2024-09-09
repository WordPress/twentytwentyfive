<?php
/**
 * Title: Overlap images and paragraph on right
 * Slug: twentytwentyfive/overlap-images-and-paragraph
 * Categories: about, media, text
 * Description: A section with a Overlap Images, Paragraph and Pill Style Text.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section-5","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-5" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":null,"className":"is-style-default","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:image {"sizeSlug":"full"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/image-from-rawpixel-id-8799471.webp" alt="<?php esc_html_e( 'Photography close up of a red flower.', 'twentytwentyfive' ); ?>" /></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"-12vw"}}},"layout":{"type":"constrained","justifyContent":"right"}} -->
<div class="wp-block-group" style="margin-top:-12vw"><!-- wp:image {"width":"202px","sizeSlug":"full","align":"right","className":"is-resized","style":{"spacing":{"margin":{"right":"-5vw","left":"-5vw"}}}} -->
<figure class="wp-block-image alignright size-full is-resized" style="margin-right:-5vw;margin-left:-5vw"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/grid-flower-2.webp" alt="<?php esc_html_e( 'Black and white photography close up of a flower.', 'twentytwentyfive' ); ?>" style="width:202px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:55%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"className":"is-style-pill","fontSize":"medium"} -->
<h2 class="wp-block-heading is-style-pill has-medium-font-size"><?php esc_html_e( 'About Us', 'twentytwentyfive' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large"} -->
<p class="has-x-large-font-size" style="line-height:1.2"><?php echo wp_kses_post( _x( '<strong>Fleurs</strong> is a flower delivery and subscription business. Based in the EU, our mission is not only to deliver stunning flower arrangements across but also foster knowledge and enthusiasm on the beautiful gift of nature: flowers.', 'Content of the overlap images and paragraph pattern', 'twentytwentyfive' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
