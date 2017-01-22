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
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/source/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all" />
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/source/jquery.fancybox.js"></script>
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
			?>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/flexslider.css" type="text/css" media="screen" />
			<div class="flexslider">
				<ul class="slides">
					<?php if ( has_post_thumbnail( $product->id ) ) {
		                $attachment_ids[0] = get_post_thumbnail_id( $product->id );
		                 $attachment = wp_get_attachment_image_src($attachment_ids[0], 'full' ); ?>    
		                <li data-thumb="<?php echo $attachment[0] ; ?>">
							<div class="thumb-image"> <img src="<?php echo $attachment[0] ; ?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
		            <?php } ?>
					<?php 
						global $product;
						$attachment_ids = $product->get_gallery_attachment_ids();
						foreach( $attachment_ids as $attachment_id ) { 
					?>
							<li data-thumb="<?php echo wp_get_attachment_url( $attachment_id ); ?>">
								<div class="thumb-image"> <img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" data-imagezoom="true" class="img-responsive"> </div>
							</li>
					<?php
						  
						}
					?>
				</ul>	
			</div>
			<!-- flixslider -->
				<script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.flexslider.js"></script>
				<script>
				// Can also be used with $(document).ready()
				jQuery(window).load(function() {
				  jQuery('.flexslider').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				  });
				});
				</script>
			<!-- flixslider -->
			<!-- zooming-effect -->
			<script src="<?php echo get_template_directory_uri(); ?>/assets/js/imagezoom.js"></script>
			<!-- //zooming-effect -->
			<div class="video_url">
				<?php 
					$VideoUrl = get_field('product_video_url', $product->id); 
					if(!empty($VideoUrl)){
						if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $VideoUrl, $match)) {
						    $video_id = $match[1];
						?>
						<a class="youtube_video" href="<?=$VideoUrl?>"><img src="https://img.youtube.com/vi/<?=$video_id?>/hqdefault.jpg" ></a>
						<?php }else{ ?>
						<a target="_blank" href="<?=$VideoUrl?>"><img src="https://img.youtube.com/vi/<?=$video_id?>/hqdefault.jpg" ></a>
				<?php } } ?>
			</div>
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
<script type="text/javascript">
jQuery("a.youtube_video").click(function() {
    jQuery.fancybox({
            'padding'       : 0,
            'autoScale'     : false,
            'transitionIn'  : 'none',
            'transitionOut' : 'none',
            'title'         : this.title,
            'width'     : 680,
            'height'        : 495,
            'href'          : this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
            'type'          : 'swf',
            'swf'           : {
                 'wmode'        : 'transparent',
                'allowfullscreen'   : 'true'
            }
        });

    return false;
});


</script>