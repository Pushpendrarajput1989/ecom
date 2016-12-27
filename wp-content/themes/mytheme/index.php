<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/circular-carousel/jquery.circular-carousel.css" rel="stylesheet" type="text/css" media="all" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/circular-carousel/jquery.circular-carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/circular-carousel/script.js"></script>

<!-- banner -->
	<div class="banner" id="home1">
		<div class="container">
			<h3>fashions fade, <span>style is eternal</span></h3>
		</div>
	</div>
<!-- //banner -->

<!-- #start featured-categories -->
	<div class="new-products featured-categories-block Size">
		<div class="container">
			<h3>Featured Category</h3>
			<?php

			$prod_categories = get_terms( 'product_cat', array(
			        'orderby'    => 'name',
			        'order'      => 'ASC',
			        'hide_empty' => false,
			        'parent'     => 29
		    ));

		    foreach( $prod_categories as $prod_cat ) :
		    	if (stripos(strtolower($prod_cat->name), "rugs") !== false) {
				    $title = ucwords($prod_cat->name);
				}else{
					$title = ucwords($prod_cat->name).'&nbsp; Rugs';
				}
		        $cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
		        $shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );
		        $term_link = get_term_link( $prod_cat, 'product_cat' );?>
		        <div class="featured-categories">
			        <div class="image"><a href="<?php echo $term_link; ?>"><img src="<?php echo $shop_catalog_img[0]; ?>" alt="<?php echo $prod_cat->name; ?>" /></a></div>
			        <div class="title">
				        <a title="<?=$title?>" href="<?php echo $term_link; ?>"><?=$title?></a>
			        </div>
			        <div class="description"><p><?=$prod_cat->description?></p></div>
			    </div>
		    <?php 
		    endforeach; 
		    wp_reset_query(); 
			
			?>
		</div>
	</div>
<!-- #end featured-categories -->

<!-- #start shop-by-shape -->
	<div class="new-products shop-by-shape-block Shape">
		<div class="container">
			<h3>Shop By Shape</h3>
			<?php

			$prod_categories = get_terms( 'product_cat', array(
			        'orderby'    => 'id',
			        'order'      => 'ASC',
			        'hide_empty' => false,
			        'parent'     => 30
		    ));

		    foreach( $prod_categories as $prod_cat ) :
		    	
		        if (stripos(strtolower($prod_cat->name), "rugs") !== false) {
				    $title = ucwords($prod_cat->name);
				}else{
					$title = ucwords($prod_cat->name).'&nbsp; Rugs';
				}
					       
		        $cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
		        $shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );
		        $term_link = get_term_link( $prod_cat, 'product_cat' );?>
		        <div class="shop-by-shape">
			        <div class="image">
			        	<a href="<?php echo $term_link; ?>" title="<?=$title?>" id="<?=$prod_cat->slug?>"></a>
			        </div>
			    </div>
		    <?php 
		    endforeach; 
		    wp_reset_query(); 
			
			?>
		</div>
	</div>
<!-- #end shop-by-shape -->

<!-- #start shop-by-color -->
	<div class="new-products shop-by-color Color">
		<div class="container">
			<h3>Shop By Color</h3>
			<div class="row">
				<ul class="carousel">
					<li class="item active">
						<a href="<?=site_url()?>"><img src="http://a50e84be753e362e04e5-ab8ebe4d3eeff3d3e46504823a9fbcba.r94.cf2.rackcdn.com/Green-Olive-Sage-Rugs-text.png"></a>Test</li>
					<li class="item">
						<a href="<?=site_url()?>"><img src="http://a50e84be753e362e04e5-ab8ebe4d3eeff3d3e46504823a9fbcba.r94.cf2.rackcdn.com/Green-Olive-Sage-Rugs-text.png"></a>Test</li>
					<li class="item">
						<a href="<?=site_url()?>"><img src="http://a50e84be753e362e04e5-ab8ebe4d3eeff3d3e46504823a9fbcba.r94.cf2.rackcdn.com/Green-Olive-Sage-Rugs-text.png"></a>Test</li>
					<li class="item">
						<a href="<?=site_url()?>"><img src="http://a50e84be753e362e04e5-ab8ebe4d3eeff3d3e46504823a9fbcba.r94.cf2.rackcdn.com/Green-Olive-Sage-Rugs-text.png"></a>Test</li>
					<li class="item">
						<a href="<?=site_url()?>"><img src="http://a50e84be753e362e04e5-ab8ebe4d3eeff3d3e46504823a9fbcba.r94.cf2.rackcdn.com/Green-Olive-Sage-Rugs-text.png"></a>Test</li>
					<li class="item">
						<a href="<?=site_url()?>"><img src="http://a50e84be753e362e04e5-ab8ebe4d3eeff3d3e46504823a9fbcba.r94.cf2.rackcdn.com/Green-Olive-Sage-Rugs-text.png"></a>Test</li>
					<li class="item">
						<a href="<?=site_url()?>"><img src="http://a50e84be753e362e04e5-ab8ebe4d3eeff3d3e46504823a9fbcba.r94.cf2.rackcdn.com/Green-Olive-Sage-Rugs-text.png"></a>Test</li>
					<li class="item">
						<a href="<?=site_url()?>"><img src="http://a50e84be753e362e04e5-ab8ebe4d3eeff3d3e46504823a9fbcba.r94.cf2.rackcdn.com/Green-Olive-Sage-Rugs-text.png"></a>Test</li>
					<li class="item">
						<a href="<?=site_url()?>"><img src="http://a50e84be753e362e04e5-ab8ebe4d3eeff3d3e46504823a9fbcba.r94.cf2.rackcdn.com/Green-Olive-Sage-Rugs-text.png"></a>Test</li>		
				</ul>
			</div>
			<div class="controls">
				<a href="#" class="previous">Previous</a> 
				<a href="#" class="next">Next</a>
			</div>
		</div>
	</div>
<!-- #end shop-by-color -->

<!-- #start shop-by-construction -->
	<div class="new-products shop-by-construction Construction">
		<div class="container">
			<h3>Shop By Construction</h3>
			<?php

			$prod_categories = get_terms( 'product_cat', array(
			        'orderby'    => 'id',
			        'order'      => 'ASC',
			        'hide_empty' => false,
			        'parent'     => 31
		    ));

		    foreach( $prod_categories as $prod_cat ) :
		    	if (stripos(strtolower($prod_cat->name), "rugs") !== false) {
				    $title = ucwords($prod_cat->name);
				}else{
					$title = ucwords($prod_cat->name).'&nbsp; Rugs';
				}
		        $cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
		        $shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );
		        $term_link = get_term_link( $prod_cat, 'product_cat' );?>
		        <div class="featured-categories">
			        <div class="image"><a href="<?php echo $term_link; ?>"><img src="<?php echo $shop_catalog_img[0]; ?>" alt="<?php echo $prod_cat->name; ?>" /></a></div>
			        <div class="title">
				        <a title="<?=$title?>" href="<?php echo $term_link; ?>"><?=$title?></a>
			        </div>
			        <div class="description"><p><?=$prod_cat->description?></p></div>
			    </div>
		    <?php 
		    endforeach; 
		    wp_reset_query(); 
			
			?>
		</div>
	</div>
<!-- #end shop-by-construction -->

<!-- #start banner-bottom1 -->
	<div class="banner-bottom1">
		<div class="agileinfo_banner_bottom1_grids">
			<div class="col-md-7 agileinfo_banner_bottom1_grid_left">
				<h3>Grand Opening Event With flat<span>20% <i>Discount</i></span></h3>
				<a href="products.html">Shop Now</a>
			</div>
			<div class="col-md-5 agileinfo_banner_bottom1_grid_right">
				<h4>hot deal</h4>
				<div class="timer_wrap">
					<div id="counter"> </div>
				</div>
				<script src="js/jquery.countdown.js"></script>
				<script src="js/script.js"></script>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- #end banner-bottom1 -->

<!-- #start newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- #end newsletter -->

<?php get_footer();
