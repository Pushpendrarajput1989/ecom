<?php
/**
 * Template name: Contact Us Page
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
			<div class="agile_mail_grids">
				<div class="col-md-5 contact-left">
					<h4>Address</h4>
					<?php echo get_field('contact_address', $pageId); ?>
					<ul>
						<li>Free Phone : <?php echo get_field('contact_phone', $pageId); ?></li>
						<li>Telephone : <?php echo get_field('contact_telephone', $pageId); ?></li>
						<li>Fax : <?php echo get_field('contact_fax', $pageId); ?></li>
						<li><a href="mailto:<?php echo get_field('contact_email', $pageId); ?>"><?php echo get_field('contact_email', $pageId); ?></a></li>
					</ul>
				</div>
				<div class="col-md-7 contact-left">
					<h4>Contact Form</h4>
					<?php echo do_shortcode('[contact-form-7 id="112" title="Contact Us"]'); ?>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="contact-bottom">
				<iframe src="<?php echo get_field('contact_map', $pageId); ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
<!-- #end description -->

<?php get_footer(); ?>
