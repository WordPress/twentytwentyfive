<?php
/**
 * Title: Blog posts for the right aligned blog
 * Slug: twentytwentyfive/right-aligned-posts
 * Categories: query
 * Block Types: core/query
 * Description:
 * Viewport width: 1400
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group">
			<!-- wp:post-title {"isLink":true} /-->
			<!-- wp:post-date {"fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
		<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:post-excerpt {"moreText":""} /-->
		<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
		<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
		<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	<!-- /wp:post-template -->
	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
		<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
		<p>No posts were found.</p>
		<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
