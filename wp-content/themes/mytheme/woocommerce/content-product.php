<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
// print_r($product);
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div class="col-md-4 col-sm-6 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
	<div class="agile_ecommerce_tab_left dresses_grid">
		<div class="hs-wrapper hs-wrapper2 insertBF<?=$product->id?>">
			<?php if ( has_post_thumbnail( $product->id ) ) {
                $attachment_ids[0] = get_post_thumbnail_id( $product->id );
                 $attachment = wp_get_attachment_image_src($attachment_ids[0], 'full' ); ?>    
                <img src="<?php echo $attachment[0] ; ?>" class="img-responsive"  />
            <?php } ?>
			<?php 
				$attachment_ids = $product->get_gallery_attachment_ids();
				foreach( $attachment_ids as $attachment_id ) { 
			?>
					<img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" alt=" " class="img-responsive" /> 
			<?php
				  
				}
			?>
			<div class="w3_hs_bottom w3_hs_bottom_sub1">
				<ul>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal<?php echo $product->id; ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
					</li>
				</ul>
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
									<?php if ( has_post_thumbnail( $product->id ) ) {
						                $attachment_ids[0] = get_post_thumbnail_id( $product->id );
						                 $attachment = wp_get_attachment_image_src($attachment_ids[0], 'full' ); ?>    
						                <img src="<?php echo $attachment[0] ; ?>" class="img-responsive"  />
						            <?php } ?>
									<?php 
										$attachment_ids = $product->get_gallery_attachment_ids();
										foreach( $attachment_ids as $attachment_id ) { 
									?>
											<img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" alt=" " class="img-responsive" /> 
									<?php
										  
										}
									?>
								</div>
								<div class="col-md-7 modal_body_right">
									<h4><?php echo $product->post->post_title; ?></h4>
									<p><?php echo $product->post->post_excerpt; ?></p>
									<div class="modal_body_right_cart simpleCart_shelfItem">
										<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
										<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
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
			<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
			<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
		</div>
		<ul id="flexiselSimilarProduct<?=$product->id?>" class="similar-products">
		<?php 
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
				<?php while ( $products->have_posts() ) : $products->the_post(); ?>
					<?php if ( has_post_thumbnail( $product->id ) ) {
		                $attachment_ids[0] = get_post_thumbnail_id( $product->id );
	                 	$attachment = wp_get_attachment_image_src($attachment_ids[0], 'full' ); ?>
		            <?php } ?>
					<li><a href="<?php echo get_permalink($product->ID); ?>"><img src="<?php echo $attachment[0] ; ?>" class="img-responsive"  /></a></li>
				<?php endwhile; // end of the loop. ?>
			<?php endif; ?>
		</ul>
		<script type="text/javascript">
			$(window).load(function() {
				var productId = '<?=$product->id?>';
				$( "#flexiselSimilarProduct"+productId).insertAfter( ".insertBF"+productId);
				$("#flexiselSimilarProduct"+productId).flexisel({
					visibleItems:3,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems:2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				
			});
		</script>
	</div>
</div>
