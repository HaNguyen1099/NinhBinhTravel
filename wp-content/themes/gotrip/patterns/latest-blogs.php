<?php
/**
 * Title: Latest Blogs
 * Slug: gotrip/latest-blogs
 * Categories: gotrip
 *
 * @package GoTrip
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(180deg,rgb(255,255,255) 0%,rgb(251,251,251) 21%,rgb(255,255,255) 54%,rgb(64,219,154) 54%,rgb(6,201,175) 98%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background:linear-gradient(180deg,rgb(255,255,255) 0%,rgb(251,251,251) 21%,rgb(255,255,255) 54%,rgb(64,219,154) 54%,rgb(6,201,175) 98%)"><!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center"><?php  esc_html_e( 'Travel Inspiration', 'gotrip' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":14,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"29px","left":"0px"},"margin":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|40"},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"}}},"backgroundColor":"background","layout":{"inherit":false}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;margin-top:var(--wp--preset--spacing--70);padding-top:0px;padding-right:0px;padding-bottom:29px;padding-left:0px"><!-- wp:post-featured-image {"height":"250px","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"wrap","orientation":"horizontal","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-date /-->

<!-- wp:post-terms {"term":"category","textAlign":"center"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"fontSize":"upper-heading"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->