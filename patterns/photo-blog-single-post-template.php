<?php
/**
 * Title: Photo blog single post
 * Slug: twentytwentyfive/photo-blog-single-post
 * Template Types: posts, single
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
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:post-title {"level":1,"fontSize":"x-large"} /-->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size">Published on</p>
					<!-- /wp:paragraph -->
					<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size">Posted by</p>
					<!-- /wp:paragraph -->
					<!-- wp:post-author-name {"isLink":true,"fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size">Categories:</p>
					<!-- /wp:paragraph -->
					<!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} /-->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size">Tagged:</p>
					<!-- /wp:paragraph -->
					<!-- wp:post-terms {"term":"post_tag","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0;">
			<!-- wp:group {"tagName":"nav","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<nav class="wp-block-group" aria-label="Posts navigation" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:post-navigation-link {"type":"previous","label":"Previous Photo","fontSize":"small"} /-->
				<!-- wp:post-navigation-link {"label":"Next Photo","fontSize":"small"} /-->
			</nav>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide"} /-->

		<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:post-content {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Comments"},"align":"wide","className":"is-style-default","layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide is-style-default">
		<!-- wp:comments {"metadata":{"categories":["text"],"patternName":"twentytwentyfive/comments","name":"Comments"},"className":"wp-block-comments-query-loop","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-comments wp-block-comments-query-loop" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
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