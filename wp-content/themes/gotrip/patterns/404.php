<?php
/**
 * Title: 404
 * Slug: gotrip/404
 * Categories: gotrip
 * Inserter: no
 *
 * @package GoTrip
 * @since 1.0.0
 */

?>
<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"bottom":"60px","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull has-secondary-background-color has-background" style="margin-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:60px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"className":"wp-block-section","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"vertical"}} -->
<div class="wp-block-group alignfull wp-block-section"><!-- wp:heading {"textAlign":"center","level":1,"className":"error-icon","fontSize":"Colossal"} -->
<h1 class="wp-block-heading has-text-align-center error-icon has-colossal-font-size">404</h1>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"extra-large"} -->
<h3 class="wp-block-heading has-extra-large-font-size" style="font-style:normal;font-weight:700"><strong><?php  esc_html_e( 'Ooops..', 'gotrip' ); ?></strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontFamily":"raleway"} -->
<p class="has-text-align-center has-raleway-font-family"><?php  esc_html_e( 'We can\'t seem find the page you\'re looking for..', 'gotrip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php  esc_html_e( 'Back To home', 'gotrip' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->