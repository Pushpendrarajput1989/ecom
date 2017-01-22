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

            <div class="agileinfo_new_products_grids">

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

		        <div class="featured-categories col-md-4 agileinfo_new_products_grid">

                <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">

                <div class="image">

                <a href="<?php echo $term_link; ?>"><img src="<?php echo $shop_catalog_img[0]; ?>" alt="<?php echo $prod_cat->name; ?>" />

                <div class="media__body">

    			<h2><?=$title?></h2>

    			<p><?=$prod_cat->description?></p>

  				</div>

                </a>

                </div>

			    <h5 class="title">

				        <a title="<?=$title?>" href="<?php echo $term_link; ?>"><?=$title?></a>

			    </h5>

                </div>

			    </div>

                

		    <?php 

		    endforeach; 

		    wp_reset_query(); 

			?>

            </div>

		</div>

	</div>

<!-- #end featured-categories -->



<!-- #start shop-by-shape -->

	<div class="new-products shop-by-shape-block Shape">

		<div class="container">

			<h3>Shop By Shape</h3>

            <div class="sliderfig">

                <ul id="flexiselDemo1">

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

                <li>

			        <div class="image">

			        	<a href="<?php echo $term_link; ?>" data-toggle="tooltip" data-placement="bottom" title="<?=$title?>" id="<?=$prod_cat->slug?>"></a>

			        </div>

                    </li>

		    <?php 

		    endforeach; 

		    wp_reset_query(); 

			

			?>

            </ul>

            </div>

            <script type="text/javascript">

				$(window).load(function() {

					$('[data-toggle="tooltip"]').tooltip();

					$("#flexiselDemo1").flexisel({

						visibleItems: 4,

						animationSpeed: 1000,

						autoPlay: false,

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

<!-- #end shop-by-shape -->

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  -->

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/circular-carousel/jquery.circular-carousel.css" rel="stylesheet" type="text/css" media="all" />

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/circular-carousel/jquery.circular-carousel.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/circular-carousel/script.js"></script>

<!-- #start shop-by-color -->

	<div class="new-products shop-by-color Color">

		<div class="container">

			<h3>Shop By Color</h3>

			<div class="row">

				<ul class="carousel">

					<?php



					$prod_categories = get_terms( 'product_cat', array(

					        'orderby'    => 'id',

					        'order'      => 'ASC',

					        'hide_empty' => false,

					        'parent'     => 36

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

				        <li class="item">

				        	<a href="<?php echo $term_link; ?>" data-toggle="tooltip" data-placement="top" title="<?=$title?>" title="<?=$title?>" id="<?=$prod_cat->slug?>">

				        		<img src="<?php echo $shop_catalog_img[0]; ?>" alt="<?php echo $prod_cat->name; ?>" />

			        		</a>

				        </li>		         

				    <?php 

				    endforeach; 

				    wp_reset_query(); 

					

					?>

				</ul>

			</div>

			<div class="controls">

				<a href="#" class="previous"><span class="glyphicon glyphicon-menu-left"></span></a> 

				<a href="#" class="next"><span class="glyphicon glyphicon-menu-right"></span></a>

			</div>

		</div>

	</div>

<!-- #end shop-by-color -->



<!-- #start shop-by-construction -->

	<div class="new-products shop-by-construction Construction">

		<div class="container">

			<h3>Shop By Construction</h3>

            <div class="agileinfo_new_products_grids">

			<?php



			$prod_categories = get_terms( 'product_cat', array(

			        'orderby'    => 'id',

			        'order'      => 'ASC',

			        'hide_empty' => false,

			        'parent'     => 31,
			        'number'     => 4

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

		        <div class="featured-categories col-md-3 agileinfo_new_products_grid">

                <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">

                

			        <div class="image">

                    <a href="<?php echo $term_link; ?>"><img src="<?php echo $shop_catalog_img[0]; ?>" alt="<?php echo $prod_cat->name; ?>" />

                    <div class="media__body">

    			<h2><?=$title?></h2>

    			<p><?=$prod_cat->description?></p>

  				</div>

                </a>

                    </div>

			        <h5 class="title">

				        <a title="<?=$title?>" href="<?php echo $term_link; ?>"><?=$title?></a>

			        </h5>

			    </div>

                </div>

		    <?php 

		    endforeach; 

		    wp_reset_query(); 

			

			?>

            </div>

		</div>

	</div>

<!-- #end shop-by-construction -->



<!-- #start banner-bottom1 -->

	<div class="banner-bottom1">

		<div class="agileinfo_banner_bottom1_grids">

			<div class="col-md-7 agileinfo_banner_bottom1_grid_left">

				<h3><?=ot_get_option('thumbnail_text'); ?></h3>

				<a href="<?=ot_get_option('link'); ?>"><?=ot_get_option('link_title'); ?></a>

			</div>

			<div class="col-md-5 agileinfo_banner_bottom1_grid_right">

				<!-- <h4>hot deal</h4> -->

				<div class="timer_wrap">

					<div id="counter"> </div>

				</div>

				<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.countdown.js"></script>

				<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

			</div>

			<div class="clearfix"> </div>

		</div>

	</div>

<!-- #end banner-bottom1 -->







<?php get_footer();

