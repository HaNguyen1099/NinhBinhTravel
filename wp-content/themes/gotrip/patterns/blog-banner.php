<?php
/**
 * Title: Blog Banner
 * Slug: gotrip/blog-banner
 * Categories: gotrip
 *
 * @package GoTrip
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg","id":1419,"dimRatio":40,"overlayColor":"foreground","focalPoint":{"x":0.52,"y":0},"minHeight":430,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull is-light" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:430px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1419" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg" style="object-position:52% 0%" data-object-fit="cover" data-object-position="52% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"color-light","fontSize":"Colossal"} -->
<h3 class="wp-block-heading has-text-align-center has-color-light-color has-text-color has-colossal-font-size"><?php  esc_html_e( 'Blog', 'gotrip' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->