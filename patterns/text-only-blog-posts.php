<?php
/**
 * Title: Text-only blog, posts
 * Slug: twentytwentyfive/text-only-blog-posts
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:query-no-results {"align":"wide","fontSize":"small"} -->
			<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
			<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:paragraph -->
			<p>No posts were found.</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:group -->
	<!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|opacity-20","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--opacity-20);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
			<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->
			<!-- wp:post-date {"textAlign":"right","isLink":true,"fontSize":"x-small"} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
