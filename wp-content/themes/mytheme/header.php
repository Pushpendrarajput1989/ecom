<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- //for-mobile-apps -->
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/validationEngine.jquery.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<!-- //js -->
<!-- countdown -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.countdown.css" />
<!-- //countdown -->
<!-- cart -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.validationEngine.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.validationEngine-en.js" type="text/javascript"></script>
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<script type="text/javascript">
	$(window).load(function() {
		$("#flexiselDemo2").flexisel({
			visibleItems:3,
			animationSpeed: 1000,
			autoPlay: true,
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
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.flexisel.js"></script>
<!-- //end-smooth-scrolling -->
<?php  wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_template_part( 'template-parts/header/header', 'image' ); ?>
	<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>		