<?php
/**
 * Title: Vertical Header
 * Slug: twentytwentyfive/vertical-header
 * Categories: header
 * Block Types: core/template-part/vertical-header
 * Description: Vertical Header with site title and navigation
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"wide","style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
    <!-- wp:group {"align":"wide","style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide" style="min-height:100vh;padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:group {"align":"full","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
        <div class="wp-block-group alignfull">
            <!-- wp:navigation {"ref":4,"overlayMenu":"always","style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal","flexWrap":"wrap"}} /-->

            <!-- wp:site-title {"level":0,"style":{"typography":{"writingMode":"vertical-rl"}},"fontSize":"large"} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
