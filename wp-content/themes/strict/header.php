<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Strict
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

	<!--Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
		
		.close {
			background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/close.png');
		}
		
		.close:hover,
		.close:focus {
			background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/close-hover.png');
		}
		
		/*Hover Icons*/
		
		.icon-face {
			background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/facebook.png'); 
		}
		
		.icon-face:hover {
			background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/facebook-hover.png');
		}
		
		.icon-twitt {
			background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/twitter.png');
		}
		
		.icon-twitt:hover {
			background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/twitter-hover.png');
		}
		
		.icon-goog {
			background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/google.png');
		}
		
		.icon-goog:hover {
			background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/google-hover.png');
		}
		
		.icon-link {
			background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/linkedin.png');
		}
		
		.icon-link:hover {
			background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/linkedin-hover.png');
		}
		
		
	</style>



  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
      <div class="row" id="contenedor-header">
	    	<div class="col-md-6">
				<?php the_custom_logo(); ?>
	    	</div>
					
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'	=>	'nav nav-pills col-md-offset-2',
						'container_class'		=>	'col-md-6'
					) );
				?>
        	
		</div>
    
	</header>
	
	<div id="content" class="site-content">
