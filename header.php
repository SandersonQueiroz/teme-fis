<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<style type="text/css">
	html {
	font-family: 'Montserrat';
	}
		
		.azul-fis {
	background-color: #0E2E47;<!-- #ffd202; -->
}

	</style>
		 
        
		<link href="<?php echo get_template_directory_uri(); ?>/assets/css/materialize.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/icons-fis.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />

	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	 
	 
	 
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	
</head>

<body bgcolor="#fff">
	<header>
		<div class="navbar-fixed">
		<!-- Dropdown Structure -->
<ul id="dropdown1" class="blue lighten-2 dropdown-content">
  
  	<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav navbar-nav',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
					?>
</ul>

<!-- Dropdown Structure -->
<ul id="dropdown2" class="blue lighten-2 dropdown-content">
  <li><a class="dropdown-button font-mont" href="#!" data-activates="dropdown3">Graduação</a></li>
  <li class="divider"></li>
  <li><a class="small" href="#!">Administração</a></li>
  <li><a href="#!">Ciências Contábeis</a></li>
  <li><a href="#!">Direito</a></li>
  <li><a href="#!">Enfermagem</a></li>
  <li><a href="#!">Fisionterapia</a></li>
  <li><a href="#!">Logistica</a></li>
  <li><a href="#!">R. de Computadores</a></li>
  <li><a class="small" href="#!">Construção de Edifícios</a></li>
    <li class="divider"></li>
  <li><a>Pós Graduação</a></li>
    <li class="divider"></li>
  <li><a href="#!">Analises Clinicas</a></li>
</ul>

			<nav class="yellow accent-4">
				<div id="font-setting-buttons" class="nav-wrapper z-depth-0 blue-text text-darken-2">
				 	<a class="brand-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-log" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"></a>
	 				<a href="#" data-activates="mobile-demo" class="white-text button-collapse"><i class="mdi-navigation-menu"></i></a>
	 				<a href="#" data-activates="mobile-dem" class="white-text right"><i class="mdi-action-search"></i></a>
	 				<a id="reduz_fonte" class="white-text right decrease-me" href="#" title="Reduzir tamanho da fonte">A-</a>
		    		<a id="aumenta_fonte" class="white-text right increase-me" href="#" title="Aumentar tamanho da fonte">A+</a>
 				  	
 				 
				</div>
			</nav>
		</div>
		
		

		
</header>


<div id="main" class="row">
