<?php

/**
 *
 * This template can be overridden by copying it to yourtheme/wp-travel/single-itineraries.php.
 *
 * HOWEVER, on occasion wp-travel will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.wensolutions.com/document/template-structure/
 * @author  WenSolutions
 * @package WP_Travel
 * @since   1.0.0
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php
	$block_header = do_blocks( '<!-- wp:template-part {"slug":"header","theme":"gotrip","tagName":"header","className":"site-header"} /-->');
	$block_main = do_blocks( '<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"0","right":"0"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0">');
	
	$block_main_close = do_blocks( '</main><!-- /wp:group -->');
	$block_footer = do_blocks( '<!-- wp:template-part {"slug":"footer","theme":"gotrip","tagName":"footer","className":"site-footer"} /-->');
 	?>
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
			
	<?php wp_body_open(); ?>
	<div class="wp-site-blocks">
		<?php echo $block_header; ?>
		<?php echo $block_main; ?>
	
		
			<div id="page" class="wrapper">

				<?php do_action('wp_travel_before_main_content'); ?>

				<?php

				while (have_posts()) :
					the_post();
					do_action('wptravel_single_itinerary_main_content');

				endwhile; // end of the loop.
				?>

			</div>
		
		<?php echo $block_main_close; ?>
		<?php echo $block_footer; ?>
		<?php wp_footer(); ?>
	</div>	
</body>
</html>
