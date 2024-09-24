<?php
/**
 * Title: Intro with left-aligned description
 * Slug: twentytwentyfive/intro-left-aligned-description
 * Categories: banner, featured
 * Description: A large left-aligned heading with a brand name emphasized in bold.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"dimensions":{"minHeight":"0vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="min-height:0vh;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:heading {"textAlign":"left","level":1,"align":"wide"} -->
	<h1 class="wp-block-heading alignwide has-text-align-left">
		<?php
			printf(
				/* translators: %1$s is the brand name, e.g., 'Fleurs'. */
				esc_html_x( 'We\'re %1$s, our mission is to deliver exquisite flower arrangements that not only adorn living spaces but also inspire a deeper appreciation for natural beauty.', 'Example pattern text', 'twentytwentyfive' ),
				'<strong>' . esc_html_x( 'Fleurs', 'Example brand name in pattern', 'twentytwentyfive' ) . '</strong>'
			);
			?>
	</h1>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->
