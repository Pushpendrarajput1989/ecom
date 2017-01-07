<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
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

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
