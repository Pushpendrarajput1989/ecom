<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
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
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' );
$termID = get_queried_object()->term_id;
$taxonomy = 'product_cat';
$catImg = get_field('banner_image', $taxonomy.'_'.$termID);
$defaultImg = get_template_directory_uri().'/assets/images/default.jpg';
?>
<!-- banner -->
	<div class="banner1" style="background: url('<?php echo (!empty($catImg))?$catImg:$defaultImg; ?>'); background-size: cover;" id="home1">
		<div class="container">
			<?php echo the_field('banner_image_text', $taxonomy.'_'.$termID); ?>
		</div>
	</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<?php
				$args = array(
			            'delimiter' => '',
			            'wrap_before' => '<ul class="breadcrumb">',
			            'wrap_after'  => '</ul>',
			            'before'      => '<li>',
			            'after'       => '</li>',
				);
				woocommerce_breadcrumb($args); 
			?>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<div class="dresses">
		<div class="container">
			<div class="w3ls_dresses_grids">
				<!-- #Start product filters -->
				<div class="col-md-4 w3ls_dresses_grid_left">
					<?php get_sidebar(); ?>
				</div>
				<!-- #End product filters -->

				<!-- #Start product listing -->
				<div class="col-md-8 w3ls_dresses_grid_right">
					<div class="col-md-6 w3ls_dresses_grid_right_left">
						<div class="w3ls_dresses_grid_right_grid1">
							<img src="<?php echo the_field('featured_block_image_first', $taxonomy.'_'.$termID); ?>" alt=" " class="img-responsive" />
							<div class="w3ls_dresses_grid_right_grid1_pos">
								<?php echo the_field('featured_block_text_first', $taxonomy.'_'.$termID); ?>
							</div>
						</div>
					</div>
					<div class="col-md-6 w3ls_dresses_grid_right_left">
						<div class="w3ls_dresses_grid_right_grid1">
							<img src="<?php echo the_field('featured_block_image_second', $taxonomy.'_'.$termID); ?>" alt=" " class="img-responsive" />
							<div class="w3ls_dresses_grid_right_grid1_pos1">
								<?php echo the_field('featured_block_text_second', $taxonomy.'_'.$termID); ?>
							</div>
						</div>
					</div>

					<div class="clearfix"> </div>

					<?php echo do_shortcode("[wdm_auction_listing]"); ?>

				</div>
				<!-- #End product listing -->
			</div>
		</div>
    </div>
	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

<?php get_footer( 'shop' ); ?>
