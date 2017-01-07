<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product, $woocommerce_loop;

if ( empty( $product ) || ! $product->exists() ) {
	return;
}

if ( ! $related = $product->get_related( $posts_per_page ) ) {
	return;
}

$args = apply_filters( 'woocommerce_related_products_args', array(
	'post_type'            => 'product',
	'ignore_sticky_posts'  => 1,
	'no_found_rows'        => 1,
	'posts_per_page'       => $posts_per_page,
	'orderby'              => $orderby,
	'post__in'             => $related,
	'post__not_in'         => array( $product->id )
) );

$products                    = new WP_Query( $args );
$woocommerce_loop['name']    = 'related';
$woocommerce_loop['columns'] = apply_filters( 'woocommerce_related_products_columns', $columns );

if ( $products->have_posts() ) : ?>

	<div class="w3l_related_products ">
		<div class="container">
		<h3><?php _e( 'Related Products', 'woocommerce' ); ?></h3>
		<?php woocommerce_product_loop_start(); ?>
		<ul id="flexiselDemo2">		
			<?php while ( $products->have_posts() ) : $products->the_post(); ?>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<?php 
									$attachment_ids = $product->get_gallery_attachment_ids();
									foreach( $attachment_ids as $attachment_id ) { 
								?>
										<img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" alt=" " class="img-responsive" /> 
								<?php
									  
									}
								?>
								<?php // do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal<?php echo $product->id; ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>

								<!-- #Start Model -->
								<div class="modal video-modal fade" id="myModal<?php echo $product->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModal<?php echo $product->id; ?>">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
											</div>
											<section>
												<div class="modal-body">
													<div class="col-md-5 modal_body_left">
														<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
													</div>
													<div class="col-md-7 modal_body_right">
														<h4><?php echo $product->post->post_title; ?></h4>
														<p><?php echo $product->post->post_excerpt; ?></p>
														<div class="modal_body_right_cart simpleCart_shelfItem">
															<p><?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?></p>
															<p><?php do_action( 'woocommerce_after_shop_loop_item' ); ?></p>
														</div>
													</div>
													<div class="clearfix"> </div>
												</div>
											</section>
										</div>
									</div>
								</div>
								<!-- #End Model -->
							</div>
							<h5><a href="<?php echo get_permalink($product->ID); ?>"><?php echo $product->post->post_title; ?></a></h5>
							<div class="simpleCart_shelfItem">
								<p><?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?></p>
								<p><?php do_action( 'woocommerce_after_shop_loop_item' ); ?></p>
							</div>
						</div>
					</div>
				</li>
			<?php endwhile; // end of the loop. ?>
		</ul>
		<?php woocommerce_product_loop_end(); ?>
		</div>
	</div>
<?php endif;

wp_reset_postdata();
