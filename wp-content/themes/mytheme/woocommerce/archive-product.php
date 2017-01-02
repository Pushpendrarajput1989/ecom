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
?>
<!-- banner -->
	<div class="banner1" style="background: url('<?php echo the_field('banner_image', $taxonomy.'_'.$termID); ?>');" id="home1">
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

		<?php if ( have_posts() ) : ?>
			<div class="w3ls_dresses_grid_right_grid2">
				<?php
					/**
					 * woocommerce_before_shop_loop hook.
					 *
					 * @hooked woocommerce_result_count - 20
					 * @hooked woocommerce_catalog_ordering - 30
					 */
					do_action( 'woocommerce_before_shop_loop' );
				?>
			</div>
			
				<?php woocommerce_product_loop_start(); ?>

					<?php woocommerce_product_subcategories(); ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php wc_get_template_part( 'content', 'product' ); ?>

					<?php endwhile; // end of the loop. ?>

				<?php woocommerce_product_loop_end(); ?>

				<?php
					/**
					 * woocommerce_after_shop_loop hook.
					 *
					 * @hooked woocommerce_pagination - 10
					 */
					do_action( 'woocommerce_after_shop_loop' );
				?>

			<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

				<?php wc_get_template( 'loop/no-products-found.php' ); ?>

			<?php endif; ?>

		</div>
		<!-- #End product listing -->
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
