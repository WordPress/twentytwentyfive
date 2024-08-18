<?php
/**
 * Title: Header with large title
 * Slug: twentytwentyfive/header-large-title
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with large site title and right aligned navigation
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:site-title {"level":0,"style":{"typography":{"fontSize":"100px"}}} /-->
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"right","orientation":"vertical"}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->