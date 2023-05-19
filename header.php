<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package miweb
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'miweb' ); ?></a>

	<header id="masthead" class="site-header">
				
		<nav id="navMenu">
			
			<div id="toggle-menu" class="toggle-menu">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/Hamburger_icon.png" alt="hamburger-icon">
			</div>
			<div class="mainMenu" id="mainMenu">				
				<a class="active" href="<?php echo get_home_url().'/home';?>">Automatizo tu negocio</a>
				<a href="<?php echo get_home_url();?>/portafolio">Portafolio</a>
				<a href="<?php echo get_home_url();?>/about">Sobre mí</a>  
				<a href="<?php echo get_home_url();?>/contact">Contacto</a>  
			</div>
		</nav>

	</header><!-- #masthead -->
