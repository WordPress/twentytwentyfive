<?php
/**
 * Title: Centered link and social links
 * Slug: twentytwentyfive/contact-centered-social-link
 * Keywords: contact, social-link
 * Categories: contact
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"x-large"} -->
	<p class="has-text-align-center has-contrast-color has-text-color has-link-color has-x-large-font-size">Got questions?<br>Feel free to reach out.</p>
	<!-- /wp:paragraph -->

	<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#111111","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color is-style-logos-only">
		<!-- wp:social-link {"service":"twitter"} /-->
		<!-- wp:social-link {"service":"facebook"} /-->
		<!-- wp:social-link {"service":"instagram"} /-->
		<!-- wp:social-link {"service":"pinterest"} /-->
	</ul>
	<!-- /wp:social-links -->
</div>
<!-- /wp:group -->
