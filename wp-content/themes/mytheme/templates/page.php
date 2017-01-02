<?php
/**
 * Template name: Full Width Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 
$pageId = get_the_ID();
?>

<!-- banner -->
	<div class="banner10" style="background: url('<?php echo get_field('header_image', $pageId); ?>');" id="home1">
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

<!-- #start description -->
	<div class="about">
		<div class="container">	
			<div class="w3ls_about_grids">
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();
					the_content();
				endwhile;
				// End of the loop.
				?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- #end description -->

<?php get_footer(); ?>
