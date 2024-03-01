<?php
/**
 * Itinerary Archive Template
 *
 * This template can be overridden by copying it to yourtheme/wp-travel-tour-extras/single-extra.php.
 *
 * HOWEVER, on occasion wp-travel will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.wensolutions.com/document/template-structure/
 * @author      WenSolutions
 * @package     wp-travel-tour-extras/Templates
 * @since       1.0.0
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
<?php

global $post;
if ( ! $post )
	return;

$post_id = $post->ID;
$gallery_ids = get_post_meta( $post_id, 'wp_travel_extras_gallery_ids', true );
$trip_extras_data = get_post_meta( $post_id, 'wp_travel_tour_extras_metas', true );

$description      = isset( $trip_extras_data['extras_item_description'] ) && ! empty( $trip_extras_data['extras_item_description'] ) ? $trip_extras_data['extras_item_description'] : false;
$price            = isset( $trip_extras_data['extras_item_price'] ) && ! empty( $trip_extras_data['extras_item_price'] ) ? $trip_extras_data['extras_item_price'] : false;
$sale_price       = isset( $trip_extras_data['extras_item_sale_price'] ) && ! empty( $trip_extras_data['extras_item_sale_price'] ) ? $trip_extras_data['extras_item_sale_price'] : false;
$item_is_required = isset( $trip_extras_data['extras_is_required'] ) && ! empty( $trip_extras_data['extras_is_required'] ) ? $trip_extras_data['extras_is_required'] : ''; // @since 1.1.2
$unit             = isset( $trip_extras_data['extras_item_unit'] ) && ! empty( $trip_extras_data['extras_item_unit'] ) ? $trip_extras_data['extras_item_unit'] : false;


// Multiple Currency Support.
$price      = apply_filters( 'wp_travel_multiple_currency', $price );
$sale_price = apply_filters( 'wp_travel_multiple_currency', $sale_price );

$required_text = ! empty( $item_is_required ) ? '*Item Required' : '';
?>
<?php echo $block_header; ?>
		<?php echo $block_main; ?>
<div class="wp-tour-extras-detail">
	<div class="row wp-tour-extras-detail_content">

		<div class="col-md-6">
			<?php if ( ! empty( $gallery_ids ) && is_array( $gallery_ids ) ) : ?>
				<div class="wp-tour-extras-detail-slider-wrap">
					<div class="wp-tour-extras-detail-slider">
						<?php
						if ( has_post_thumbnail( $post_id ) ) :
							$thumb_id = get_post_thumbnail_id( $post_id );
							$img_url_large = wp_get_attachment_image_url( $id, 'large' );

						?>
							<div><figure class="wp-tour-extras-detail-thumb"><a href="<?php echo esc_url( $img_url_large ); ?>"><img src="<?php echo esc_url( get_the_post_thumbnail_url( $post_id ) ); ?>" alt="<?php echo esc_html( get_the_title( $post_id ) ); ?>"></a></figure></div>
						<?php endif; ?>

						<?php foreach( $gallery_ids as $key => $id ) :
						$img_url = wp_get_attachment_image_url( $id );
						$img_url_large = wp_get_attachment_image_url( $id, 'large' );
						?>
							<div><figure class="wp-tour-extras-detail-thumb"><a href="<?php echo esc_url( $img_url_large ); ?>"><img src="<?php echo esc_url( $img_url ); ?>" alt=""></a></figure></div>

						<?php endforeach; ?>


					</div>
					<div class="wp-tour-extras-detail-slider-nav">

						<?php if ( has_post_thumbnail( $post_id ) ) : ?>
							<div><figure class="wp-tour-extras-detail-thumb"><img src="<?php echo esc_url( get_the_post_thumbnail_url( $post_id ) ); ?>" alt="<?php echo esc_html( get_the_title( $post_id ) ); ?>"></figure></div>
						<?php endif; ?>

						<?php foreach( $gallery_ids as $key => $id ) :
						$img_url = wp_get_attachment_image_url( $id );
						?>
							<div><figure class="wp-tour-extras-detail-thumb"><img src="<?php echo esc_url( $img_url ); ?>" alt=""></figure></div>

						<?php endforeach; ?>
					</div>
				</div>
			<?php else : ?>
				<?php if( has_post_thumbnail( $post_id ) ) : ?>
					<figure class="wp-tour-extras-detail-thumb"><a href="<?php echo esc_url( get_the_post_thumbnail_url( $post_id ) ); ?>"><img src="<?php echo esc_url( get_the_post_thumbnail_url( $post_id ) ); ?>" alt=""></a></figure>
				<?php endif; ?>
			<?php endif; ?>
		</div>

		<div class="col-md-6">
			<div class="wp-tour-extras-detail-heading">
				<div class="wp-tour-extras-item-required-text"><?php echo esc_html( $required_text ); ?></div>
				<h2><?php echo esc_html( get_the_title( $post_id ) ); ?></h2>
				<?php if ( $description ) : ?>
					<?php echo wp_kses_post( wpautop( $description ) ); ?>
				<?php endif; ?>
			</div>
			<div class="wp-tour-extras-detail-pricing">
				<?php if( $price || $sale_price ) : ?>
					<p><?php echo esc_html( 'Price:' ); ?>
					<?php if( $sale_price ) : ?>
						<del>
							<?php echo esc_html( wp_travel_tour_extras_formated_price( $price ) ); ?>
						</del>
						<ins>
							<?php echo esc_html( wp_travel_tour_extras_formated_price( $sale_price ) ); ?> / <?php echo esc_html( $unit ); ?>
						</ins>
					<?php else : ?>
						<ins>
							<?php echo esc_html( wp_travel_tour_extras_formated_price( $price ) ); ?> / <?php echo esc_html( $unit ); ?>
						</ins>
					<?php endif; ?>
					</p>
				<?php endif; ?>
			</div>
			<div class="wp-tour-extras-detail-desc">
				<p><?php echo apply_filters('the_content', get_post_field('post_content', $post_id)); ?></p>
			</div>
		</div>

	</div>
</div>

<?php echo $block_main_close; ?>
<?php echo $block_footer; ?>
<?php wp_footer(); ?>