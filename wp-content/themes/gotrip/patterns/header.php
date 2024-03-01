<?php
/**
 * Title: Header
 * Slug: gotrip/header
 * Categories: gotrip
 *
 * @package GoTrip
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"className":"header-bar","layout":{"type":"constrained"}} -->
<div class="wp-block-group header-bar" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"textTransform":"capitalize"}}} /-->

<!-- wp:group {"className":"header-nav-section","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group header-nav-section"><!-- wp:navigation {"layout":{"type":"flex","flexWrap":"wrap","orientation":"horizontal"},"style":{"layout":{"selfStretch":"fixed","flexSize":"84%"}}} /-->

<!-- wp:buttons {"className":"gotrip-nav-button","style":{"layout":{"selfStretch":"fixed","flexSize":"167px"}}} -->
<div class="wp-block-buttons gotrip-nav-button"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Add Places', 'gotrip' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->