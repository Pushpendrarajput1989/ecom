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
<!-- #start newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<!--START Scripts : this is the script part you can add to the header of your theme-->
				<!-- <script type="text/javascript" src="http://localhost/ecom/wp-includes/js/jquery/jquery.js?ver=2.7.5"></script> -->
				<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-en.js?ver=2.7.5"></script>
				<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.7.5"></script>
				<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.7.5"></script>
				<script type="text/javascript">
	                /* <![CDATA[ */
	                var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"http://localhost/ecom/wp-admin/admin-ajax.php","loadingTrans":"Loading..."};
	                /* ]]> */
	                </script><script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.7.5">  	
                </script>
				<!--END Scripts-->

				<div class="widget_wysija_cont html_wysija">
					<div id="msg-form-wysija-html58753c537a1b2-1" class="wysija-msg ajax"></div>
					<form id="form-wysija-html58753c537a1b2-1" method="post" action="#wysija" class="widget_wysija html_wysija">
						<p class="wysija-paragraph">				    
						    	<input type="email" name="wysija[user][email]" class="wysija-input validate[required,custom[email]]" title="Email" placeholder="Email" value="" /> 
						    <span class="abs-req">
						        <input type="text" name="wysija[user][abs][email]" class="wysija-input validated[abs][email]" value="" />
						    </span>
						    
						</p>
						<input class="wysija-submit wysija-submit-field" type="submit" value="" />
					    <input type="hidden" name="form_id" value="1" />
					    <input type="hidden" name="action" value="save" />
					    <input type="hidden" name="controller" value="subscribers" />
					    <input type="hidden" value="1" name="wysija-page" />
				        <input type="hidden" name="wysija[user_list][list_ids]" value="1" /> 
				 	</form>
			 	</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- #end newsletter -->

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
		
