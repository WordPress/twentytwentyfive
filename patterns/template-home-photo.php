<?php
/**
 * Title: Photo blog home template with post featured images
 * Slug: twentytwentyfive/template-home-photo
 * Template Types: front-page, home
 * Viewport width: 1400
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>

<!-- wp:template-part {"slug":"header","area":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"x-small"} -->
	<h1 class="wp-block-heading has-text-align-center has-x-small-font-size">Stories</h1>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size">Tell your story</h2>
	<!-- /wp:heading -->

	<!-- wp:pattern {"slug":"twentytwentyfive/posts-photo-blog"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
