<?php
/**
 * Title: Photo blog home
 * Slug: twentytwentyfive/photo-blog-home
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
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"small"} -->
	<h1 class="wp-block-heading has-text-align-center has-small-font-size">Stories</h1>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size">Tell your story</h2>
	<!-- /wp:heading -->

	<!-- wp:pattern {"slug":"twentytwentyfive/photo-blog-posts"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
