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

	<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:query-pagination {"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
