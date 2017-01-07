<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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
	exit; // Exit if accessed directly
}

?>
<div class="single">
	<div class="container">
		
		<?php
			/**
			 * woocommerce_before_single_product hook.
			 *
			 * @hooked wc_print_notices - 10
			 */
			 do_action( 'woocommerce_before_single_product' );

			 if ( post_password_required() ) {
			 	echo get_the_password_form();
			 	return;
			 }
		?>
		<div class="col-md-4 single-left">
			<?php
				/**
				 * woocommerce_before_single_product_summary hook.
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				//do_action( 'woocommerce_before_single_product_summary' );
			?>
			<div class="flexslider">
				<ul class="slides">
					<li data-thumb="<?php echo get_template_directory_uri(); ?>/assets/images/a.jpg">
						<div class="thumb-image"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a.jpg" data-imagezoom="true" class="img-responsive"> </div>
					</li>
					<li data-thumb="<?php echo get_template_directory_uri(); ?>/assets/images/b.jpg">
						 <div class="thumb-image"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/b.jpg" data-imagezoom="true" class="img-responsive"> </div>
					</li>
					<li data-thumb="<?php echo get_template_directory_uri(); ?>/assets/images/c.jpg">
					   <div class="thumb-image"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c.jpg" data-imagezoom="true" class="img-responsive"> </div>
					</li> 
				</ul>
			</div>
			<!-- flixslider -->
				<script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.flexslider.js"></script>
				<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/flexslider.css" type="text/css" media="screen" />
				<script>
				// Can also be used with $(document).ready()
				$(window).load(function() {
				  $('.flexslider').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				  });
				});
				</script>
			<!-- flixslider -->
			<!-- zooming-effect -->
				<script src="<?php echo get_template_directory_uri(); ?>/assets/js/imagezoom.js"></script>
			<!-- //zooming-effect -->
		</div>
		<div class="col-md-8 single-right">
			<?php
				/**
				 * woocommerce_single_product_summary hook.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 */
				do_action( 'woocommerce_single_product_summary' );
			?>
				<!-- <div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked>
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div> -->

				<!-- <div class="simpleCart_shelfItem">
					<p><span>$320</span> <i class="item_price">$250</i></p>
					<p><a class="item_add" href="#">Add to cart</a></p>
				</div> -->

			</div>
			<div class="clearfix"></div>
		<?php do_action( 'woocommerce_after_single_product' ); ?>
	</div>
</div>

		<?php
			/**
			 * woocommerce_after_single_product_summary hook.
			 *
			 * @hooked woocommerce_output_product_data_tabs - 10
			 * @hooked woocommerce_upsell_display - 15
			 * @hooked woocommerce_output_related_products - 20
			 */
			do_action( 'woocommerce_after_single_product_summary' );
		?>
