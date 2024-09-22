<?php
/**
 * Title: Search - Big heading and search form
 * Slug: twentytwentyfive/search-big-heading
 * Categories: call-to-action, text
 * Description: Large heading with a search form for quick navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--custom--font-size--huge)"}}} -->
		<h3 class="wp-block-heading" style="font-size:var(--wp--custom--font-size--huge);"><?php esc_html_e( 'What are you looking for?', 'twentytwentyfive' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"<?php esc_html_e( 'Type here...', 'twentytwentyfive' ); ?>","buttonText":"<?php esc_html_e( 'Search', 'twentytwentyfive' ); ?>"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
