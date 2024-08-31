<?php
/**
 * Title: Search - Big heading and search form
 * Slug: twentytwentyfive/search-big-heading
 * Categories: call-to-action, text
 * Description: heading with search form
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"140px","bottom":"140px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide" style="padding-top:140px;padding-bottom:140px"><!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading"><?php esc_html_e( 'What are you looking for?', 'twentytwentyfive' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"<?php esc_html_e( 'Type here...', 'twentytwentyfive' ); ?>","buttonText":"<?php esc_html_e( 'Search', 'twentytwentyfive' ); ?>"} /-->
</div>
<!-- /wp:group -->
