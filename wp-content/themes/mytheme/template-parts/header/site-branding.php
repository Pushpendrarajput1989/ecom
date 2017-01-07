<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="header">
	<div class="container">
		<div class="w3l_login">
			<?php if(is_user_logged_in()){ ?>
			 	<div class="dropdown">
				  	<a class="dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				  	<span class="caret"></span></a>
				  	<ul class="dropdown-menu">
				    	<li><a href="<?php echo get_permalink(7); ?>" title="<?php _e('My Account','woothemes'); ?>" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> My Account</a></li>
				    	<li><a href="<?php echo get_permalink(7); ?>orders" title="<?php _e('My Orders','woothemes'); ?>" ><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> My Orders</a></li>
				    	<li><a href="<?php echo get_permalink(7); ?>customer-logout" title="<?php _e('Logout Account','woothemes'); ?>" ><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
				  	</ul>
				</div> 
			<?php }else{ ?>
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			<?php } ?>
		</div>
		<div style="text-align: center;" class="w3l_logo">
			<h1><a href="<?=site_url()?>">JPS RUGS<span>For Rugs Lovers</span></a></h1>
		</div>
		<div class="search">
			<input class="search_box" type="checkbox" id="search_box">
			<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
			<div class="search_form">
				<?php get_search_form(); ?>
				<form action="#" method="post">
					<input type="text" name="Search" placeholder="Search...">
					<input type="submit" value="Send">
				</form>
			</div>
		</div>
		<div class="cart box_1">
			<a href="checkout.html">
				<div class="total">
				<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bag.png" alt="" />
			</a>
			<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
			<div class="clearfix"> </div>
		</div>	
		<div class="clearfix"> </div>
	</div>
</div>
<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">
						Don't Wait, Login now!</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
									</ul>		
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<?php $loggedError = wc_print_notices(); ?>
										<div class="facts">
											<div class="register">
												<form method="post" class="login">
													<?php do_action( 'woocommerce_login_form_start' ); ?>

													<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
														<label for="username"><?php _e( 'Username or email address', 'woocommerce' ); ?> <span class="required">*</span></label>
														<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" required value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
													</p>
													<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
														<label for="password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
														<input class="woocommerce-Input woocommerce-Input--text input-text" required type="password" name="password" id="password" />
													</p>

													<?php do_action( 'woocommerce_login_form' ); ?>

													<p class="form-row">
														<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
														<input type="submit" class="woocommerce-Button button" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>" />
														<label for="rememberme" class="inline">
															<input class="woocommerce-Input woocommerce-Input--checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <?php _e( 'Remember me', 'woocommerce' ); ?>
														</label>
													</p>
													<p class="woocommerce-LostPassword lost_password">
														<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'woocommerce' ); ?></a>
													</p>
													<?php do_action( 'woocommerce_login_form_end' ); ?>
												</form>
											</div>
										</div> 
									</div>	

									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												<form method="post" class="register">
													<?php do_action( 'woocommerce_register_form_start' ); ?>

													<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

														<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
															<label for="reg_username"><?php _e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
															<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" required id="reg_username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
														</p>

													<?php endif; ?>

													<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
														<label for="reg_email"><?php _e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
														<input type="email" required class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" />
													</p>

													<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

														<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
															<label for="reg_password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
															<input type="password" required class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" />
														</p>

													<?php endif; ?>

													<!-- Spam Trap -->
													<div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" autocomplete="off" /></div>

													<?php do_action( 'woocommerce_register_form' ); ?>
													<?php do_action( 'register_form' ); ?>

													<p class="woocomerce-FormRow form-row">
														<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
														<input type="submit" class="woocommerce-Button button" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>" />
													</p>

													<?php do_action( 'woocommerce_register_form_end' ); ?>

												</form>
											</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
							<div id="OR" class="hidden-xs">
								OR</div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">Sign in with</h3>
								</div>
								<div class="col-md-12">
									<?php echo do_shortcode("[apsl-login-lite]"); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>