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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Fuentes -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	<?php wp_head(); ?>
</head>

<body id="page-top" <?php body_class(); ?>>
		<header class="header-basic-light">

			<div class="header-limiter">

				<h1><a href="#" class='posicionlog'>Company<span>logo</span></a></h1>

				<nav id="menu-principal">
					<a href="#">Home</a>
					<a href="#" class="selected">Blog</a>
					<a href="#">Pricing</a>
					<a href="#">About</a>
					<a href="#">Faq</a>
					<a href="#">Contact</a>
				</nav>
			</div>

		</header>
		<div class="contenedor-banner">
			<div class="responsive-banner">
	 			<img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/banner.jpg">
	  
	    	
	    	<div class="tittle-banner">
	      		<h1>Live Sites using our WordPress Themes</h1>
	    	</div>
	  
			</div>
		</div>
<div class="contenedorsimple">
</div>
<div class="link-container">
  <a target="_blank" href="https://www.silocreativo.com/en/showcase/" class="more-link">Visit the original article</a>
</div>

	<div id="content" class="site-content">

