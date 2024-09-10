<?php
/**
 * Title: Text-only blog, single post
 * Slug: twentytwentyfive/text-only-blog-single-post
 * Template Types: posts, single
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
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} /-->
		<!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"fontSize":"xx-large"} /-->

		<!-- wp:post-content {"align":"full","layout":{"type":"constrained"}} /-->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:post-terms {"term":"post_tag","separator":"  ","className":"is-style-post-terms-1"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:group {"tagName":"nav","align":"wide","style":{"border":{"top":{"color":"var:preset|color|opacity-20","width":"1px"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<nav class="wp-block-group alignwide" aria-label="Posts navigation" style="border-top-color:var(--wp--preset--color--opacity-20);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->
				<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow"} /-->
			</nav>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Comments"},"className":"is-style-default","layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group is-style-default">
		<!-- wp:comments {"metadata":{"categories":["text"],"patternName":"twentytwentyfive/comments","name":"Comments"},"className":"wp-block-comments-query-loop","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"padding":{"right":"0","left":"0"}}}} -->
		<div class="wp-block-comments wp-block-comments-query-loop" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);padding-right:0;padding-left:0">
			<!-- wp:heading {"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size">Comments</h2>
			<!-- /wp:heading -->

			<!-- wp:comments-title {"level":3,"fontSize":"large"} /-->

			<!-- wp:comment-template -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group">
					<!-- wp:avatar {"size":50} /-->

					<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:comment-date /-->

						<!-- wp:comment-author-name /-->

						<!-- wp:comment-content /-->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:comment-edit-link /-->

							<!-- wp:comment-reply-link /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- /wp:comment-template -->

			<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:comments-pagination-previous /-->

			<!-- wp:comments-pagination-next /-->
			<!-- /wp:comments-pagination -->

			<!-- wp:post-comments-form /-->
		</div>
		<!-- /wp:comments -->

	</div>
	<!-- /wp:group -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->