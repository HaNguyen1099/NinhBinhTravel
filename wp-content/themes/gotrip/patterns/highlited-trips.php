<?php
/**
 * Title: Highlited Trips
 * Slug: gotrip/highlited-trips
 * Categories: gotrip
 *
 * @package GoTrip
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"secondary","className":"gotrip-trip-list","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull gotrip-trip-list has-secondary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center"><?php  esc_html_e( 'Highlighted Trips', 'gotrip' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:wptravel/trips-list {"query":{"numberOfItems":4,"orderBy":"title","order":"asc"}} /-->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->