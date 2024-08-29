<?php
/**
 * Title: Text-only blog, search
 * Slug: twentytwentyfive/text-only-blog-search
 * Template Types: search
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
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:query-title {"type":"search","align":"wide","fontSize":"medium"} /-->
		<!-- wp:search {"label":"Search","showLabel":false,"widthUnit":"%","buttonText":"Search","style":{"border":{"radius":"100px"}},"borderColor":"opacity-20"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:pattern {"slug":"twentytwentyfive/text-only-blog-posts"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
