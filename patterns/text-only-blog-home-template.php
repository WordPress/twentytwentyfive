<?php
/**
 * Title: Text-only blog, home
 * Slug: twentytwentyfive/text-only-blog-home
 * Template Types: front-page, home
 * Viewport width: 1400
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:template-part {"slug":"header","tagName":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"level":1,"align":"wide","fontSize":"x-large"} -->
	<h1 class="wp-block-heading alignwide has-x-large-font-size"><?php esc_html_e( 'Blog', 'twentytwentyfive' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:pattern {"slug":"twentytwentyfive/text-only-blog-posts"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
