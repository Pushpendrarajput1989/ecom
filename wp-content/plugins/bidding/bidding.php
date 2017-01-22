<?php 
/* Plugin Name: Bidding */
add_action( 'admin_menu', 'Biddings' );

function biddings(){
	if (current_user_can('manage_options')){
		add_menu_page('Bidding', 'Biddings', 'manage_options', 'biddings', 'list_biddings','dashicons-hammer');
	}
 }


function list_biddings(){
 	global $wpdb;
	
	/*--- Deleted #Start ---*/
	
	// if ($_GET['delete']!=""){
	// 	$is_deleted = $wpdb->query("DELETE  FROM  dc_feedback WHERE id='".$_GET['delete']."'");
	// 	if($is_deleted){
	// 		echo '<div id="message" class="updated below-h2"><p>Testimonial Deleted sucessfully.</p></div>' ;
	// 	}
	// }

	// if (($_GET['is_published']!="")&&($_GET['id']!="")){
	// 	$status = (($_GET['is_published'])==1)?0:1;
	// 	$data = array('is_published'=>$status);
	// 	$where = array('id'=>$_GET['id']);
	// 	$is_updated = $wpdb->update('dc_feedback', $data, $where);
		
	// 	//$is_deleted = $wpdb->query("UPDATE  dc_feedback WHERE id='".$_GET['delete']."'");
	// 	if($is_updated){
	// 		echo '<div id="message" class="updated below-h2"><p>Testimonial Deleted sucessfully.</p></div>';
	// 	}
	// }
	
	/*--- Deleted #End ---*/
	
	$biddings = $wpdb->get_results("SELECT * FROM  wp_user_bidding");
	echo '<div style="margin: 5px 15px 2px;"><h2>User Biddings</h2>';
	echo '<table id="BidListing" style="text-align:center;">';
	if(empty($biddings)){
		echo '<tr><td class="no-feedbacks">Sorry! no result found.</td></tr>';
	}else{
		echo '<tr style="background:#fff;"><th style="padding: 1%;min-width: 100px;">User Name</th><th style="padding: 1%;min-width: 100px;">Email</th><th style="padding: 1%;min-width: 100px;">Product Name</th><th style="padding: 1%;min-width: 120px;">Offer Price($)</th><th style="padding: 1%;min-width: 100px;">Submitted at</th></tr>';
		foreach($biddings as $val):
			$userName = get_the_author_meta('user_nicename',$val->user_id);
			$userEmail = get_the_author_meta('user_email',$val->user_id);
			$product = get_post($val->product_id);
			$bidPrice = $val->bid_price;
			$publishedAt = $val->published_at;
			echo '<tr><td style="padding: 1%;min-width: 100px;">'.ucwords($userName).'</td><td style="padding: 1%;min-width: 100px;">'.$userEmail.'</td><td style="padding: 1%;min-width: 100px;"><a target="_blank" href="'.get_permalink($product->ID).'">'.$product->post_title.'</a></td><td style="padding: 1%;min-width: 100px;">'.$bidPrice.'</td><td style="padding: 1%;min-width: 100px;">'.$publishedAt.'</td></tr>';
		endforeach;	
	}
	echo '</table>';
	echo '</div>';
	 }
?>