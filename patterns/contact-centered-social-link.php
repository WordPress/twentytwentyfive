<?php
/**
 * Title: Centered link and social links
 * Slug: twentytwentyfive/contact-centered-social-link
 * Keywords: contact, social-link
 * Categories: contact
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:paragraph {"align":"center","fontSize":"x-large"} -->
	<p class="has-text-align-center has-x-large-font-size"><?php echo wp_kses_post( _x( 'Got questions? <br><a href="#" rel="nofollow">Feel free to reach out.</a>', 'Heading of the Contact social link pattern', 'twentytwentyfive' ) ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:social-links {"iconColor":"contrast","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color is-style-logos-only">
		<!-- wp:social-link {"url":"#","service":"twitter"} /-->
		<!-- wp:social-link {"url":"#","service":"facebook"} /-->
		<!-- wp:social-link {"url":"#","service":"instagram"} /-->
		<!-- wp:social-link {"url":"#","service":"pinterest"} /-->
	</ul>
	<!-- /wp:social-links -->
</div>
<!-- /wp:group -->
