<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
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

get_header( 'shop' ); 

// $terms = get_the_terms( $post->ID, 'product_cat' );
// $termID = (int)$terms[0]->term_id;
// $taxonomy = 'product_cat';

$terms = get_the_terms( $post->ID, 'product_cat' );
$termID = (int)$terms[0]->term_id;
$taxonomy = 'product_cat';
$catImg = get_field('banner_image', $taxonomy.'_'.$termID);
$defaultImg = get_template_directory_uri().'/assets/images/default.jpg';

?>

<!-- banner -->
<div class="banner1" style="background: url('<?php echo (!empty($catImg))?$catImg:$defaultImg; ?>'); background-size: cover;" id="home1">
	<div class="container">
		<h2><?php the_title(); ?></h2>
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

<?php while ( have_posts() ) : the_post(); ?>

	<?php wc_get_template_part( 'content', 'single-product' ); ?>

<?php endwhile; // end of the loop. ?>

<?php
	/**
	 * woocommerce_after_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	do_action( 'woocommerce_after_main_content' );
?>

<?php get_footer( 'shop' ); ?>
