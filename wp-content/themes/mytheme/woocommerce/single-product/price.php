<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.9
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
$isClearance = 0;
$terms = get_the_terms($product->id,'product_cat');
foreach ($terms as $key => $term) {
	if(($term->term_id)==20)
		$isClearance = 1;
}

?>
<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
<div class="simpleCart_shelfItem">
	<p class="price"><?php echo $product->get_price_html(); ?></p>
</div>
<?php if(($isClearance)&&(is_user_logged_in())){ ?>
<div class="bidPrice">
	<a href="javascript:void(0);" onclick="javascript:$('.bidform').toggle();" >Place Your Bid</a>
</div>
<div class="bidform">
	<input type="number" placeholder="Bid Price" class="bid_price" name="bid_price">
	<span id="bidmessage"></span>
	<input type="submit" onclick="get_user_bid();" value="Place Bid" name="BidSubmit">
</div>
<?php } ?>
	<meta itemprop="price" content="<?php echo esc_attr( $product->get_display_price() ); ?>" />
	<meta itemprop="priceCurrency" content="<?php echo esc_attr( get_woocommerce_currency() ); ?>" />
	<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />

</div>

<script type="text/javascript">
	function get_user_bid(){
		var BidPrice = $('.bid_price').val();
		if(BidPrice!=''){
			var productId = '<?php echo $product->id ?>';
			var userId = '<?php echo get_current_user_id() ?>';
			$.ajax({
				url:'<?php echo admin_url('admin-ajax.php'); ?>',
				type:'POST',
				data:{'action':'insertProductBid','product_id':productId,'user_id':userId, 'bid_price':BidPrice},
				beforeSend:function(){
					$('#bidmessage').html('<div class="laoder"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/smloader.gif"></div>');
				},
				success:function(response){	
					if(response==1){ 
						$('#bidmessage').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><p>Thank you ! Bid placed successfully.</p></div>');
					}else{
						$('#bidmessage').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><p>Sorry ! Bid not placed, please try again after some time.</p></div>');
					}
				}
			});
		}else{
			$('#bidmessage').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><p>Please ! Enter bid amount first.</p></div>');
		}
	}
</script>