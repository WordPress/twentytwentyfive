<?php
/**
 * Title: Centered Header
 * Slug: twentytwentyfive/header-centered
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with centered site title and navigation
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:site-title {"level":0,"textAlign":"center","align":"wide","fontSize":"large"} /-->
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"center"}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
