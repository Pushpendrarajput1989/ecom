<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="container">
	<div class="w3_footer_grids">
		<div class="col-md-3 w3_footer_grid">
			<h3>Contact</h3>
			<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
			<ul class="address">
				<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><?=ot_get_option('address'); ?></li>
				<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:<?=ot_get_option('email'); ?>"><?=ot_get_option('email'); ?></a></li>
				<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><?=ot_get_option('phone'); ?></li>
			</ul>
		</div>
		<div class="col-md-3 w3_footer_grid">
			<h3>Information</h3>
			<?php
				$args = array('menu'=>'footer-information-menu','menu_class'=>'info','menu_id'=>'','container_class'=>'info','before'=>'','link_before'=>'','depth'=>1);
				wp_nav_menu($args); 
			?>
		</div>
		<div class="col-md-3 w3_footer_grid">
			<h3>Category</h3>
			<?php
				$args = array('menu'=>'footer-category-menu','menu_class'=>'info','menu_id'=>'','container_class'=>'info','before'=>'','link_before'=>'','depth'=>1);
				wp_nav_menu($args); 
			?>
		</div>
		<div class="col-md-3 w3_footer_grid">
			<h3>Profile</h3>
			<?php
				$args = array('menu'=>'footer-profile-menu','menu_class'=>'info','menu_id'=>'','container_class'=>'info','before'=>'','link_before'=>'','depth'=>1);
				wp_nav_menu($args); 
			?>
			<h4>Follow Us</h4>
			<div class="agileits_social_button">
				<ul>
					<li><a href="<?=ot_get_option('facebook'); ?>" target="_blank" class="facebook"> </a></li>
					<li><a href="<?=ot_get_option('twitter'); ?>" target="_blank" class="twitter"> </a></li>
					<li><a href="<?=ot_get_option('gmail'); ?>" target="_blank" class="google"> </a></li>
					<li><a href="<?=ot_get_option('pintrest'); ?>" target="_blank" class="pinterest"> </a></li>
				</ul>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
		
