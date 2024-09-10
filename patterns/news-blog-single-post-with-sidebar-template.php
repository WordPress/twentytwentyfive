<?php
/**
 * Title: News blog single post with sidebar
 * Slug: twentytwentyfive/news-blog-single-post
 * Template Types: posts, single
 * Viewport width: 1400
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"metadata":{"name":"Title and post meta"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
		<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:post-date {"fontSize":"small"} /-->

		<!-- wp:post-title {"align":"wide","fontSize":"xx-large"} /-->

		<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
		<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:avatar {"size":30,"style":{"border":{"radius":"100px"}}} /-->

					<!-- wp:post-author-name {"fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:post-terms {"term":"post_tag","textAlign":"right","separator":"  ","className":"is-style-post-terms-1","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Featured Image"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:post-featured-image {"align":"wide"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Content"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:column {"width":"5%"} -->
		<div class="wp-block-column" style="flex-basis:5%"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"65%","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-column" style="padding-bottom:var(--wp--preset--spacing--60);flex-basis:65%">
			<!-- wp:post-content {"layout":{"type":"default"}} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"5%"} -->
		<div class="wp-block-column" style="flex-basis:5%"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:template-part {"slug":"sidebar"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"5%"} -->
		<div class="wp-block-column" style="flex-basis:5%"></div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"tagName":"nav","align":"wide","style":{"border":{"top":{"color":"var:preset|color|opacity-20","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<nav class="wp-block-group alignwide" aria-label="Post navigation" style="border-top-color:var(--wp--preset--color--opacity-20);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->

		<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow"} /-->
	</nav>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Comments"},"className":"is-style-default","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group is-style-default">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"5%"} -->
		<div class="wp-block-column" style="flex-basis:5%"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"65%"} -->
		<div class="wp-block-column" style="flex-basis:65%">
			<!-- wp:comments {"metadata":{"categories":["text"],"patternName":"twentytwentyfive/comments","name":"Comments"},"className":"wp-block-comments-query-loop","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
			<div class="wp-block-comments wp-block-comments-query-loop" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)">
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
		<!-- /wp:column -->

		<!-- wp:column {"width":"5%"} -->

		<div class="wp-block-column" style="flex-basis:5%"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"5%"} -->
		<div class="wp-block-column" style="flex-basis:5%"></div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->
