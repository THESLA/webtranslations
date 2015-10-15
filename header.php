<?php
/**
 *
 * @package WordPress
 * @subpackage webtranslations
 * @since WebTranslations 2.0
 */

?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes();?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes();?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html class="no-js" type="text/html" <?php language_attributes();?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset');?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.5, user-scalable=yes" />
	
<?php

if (is_home() || is_search()) { ?>

	<title><?php bloginfo('name');?></title>
	<meta name="description" content="<?php bloginfo('description');?>" />

<?php } elseif (is_404()) { ?>

 	<title><?php _e('Error 404', 'webtranslations');?> | <?php bloginfo('name');?></title>
 	<meta name="description" content="<?php bloginfo('description');?>" />

<?php } else {
	
	$meta_description	= get_post_meta( $post->ID, '_my_meta_value_key2', true );
	$meta_keywords		= get_post_meta( $post->ID, '_my_meta_value_key3', true );
	
	?> 

	<title><?php the_title();?> | <?php bloginfo('name');?></title>
	<meta name="description" content="<?php echo $meta_description;?>" />
	<meta name="keywords" content="<?php echo $meta_keywords;?>" />

<?php };

$background = of_get_option('background_de_la_web');
$background_retina = of_get_option('background_retina_de_la_web');

?>
	<meta name="author" content="<?php _e('Equipo de ', 'webtranslations') ?> WebModerna" />
	<meta name="author URL" content="http://www.webmoderna.com.ar" />
	
<?php if(wpmd_is_notdevice()) { ?>
	<!-- Condicionales de scripts para IE -->
	<!--[if IE 8]>
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/modernizr-2.8.3.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/html5.js"></script>
	<![endif]-->
<?php };?>
	
	<!-- Estlilos generales y para el IE -->
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css' /> -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/index.css" media="all" />
	<style type="text/css" media="screen">
		.fondo
		{
			background-color: <?php 
									if ( $background['color'] != null)
									{
										echo $background['color'];
									} else {
										echo "#555555";
									}
								?>;

			background-image: url("<?php
									if ( $background['image'] != null )
									{
										echo $background['image'];
									} else {
										echo get_stylesheet_directory_uri().'/img/ultrabook.jpg';
									}
								?>");
			background-repeat: <?php
								if ( $background['repeat'] != null )
								{
									echo $background['repeat'];
								} else {
									echo 'no-repeat';
								}
								?>;
			background-position: <?php echo $background['position'];?>;
			background-attachment: <?php echo $background['attachment'];?>;
			background-size: auto 100%;
			-o-background-size: auto 100%;
			-ms-background-size: auto 100%;
			-moz-background-size: auto 100%;
			-webkit-background-size: auto 100%;
			background-size: cover;
			-o-background-size: cover;
			-ms-background-size: cover;
			-moz-background-size: cover;
			-webkit-background-size: cover;
			min-height: 100%;
		}
		@media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-moz-min-device-pixel-ratio: 1.5), only screen and (-ms-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 1.5), only screen and (min-device-pixel-ratio: 1.5), only screen and (min-resolution: 240dpi) {
			.fondo
			{
				background-image: url("<?php
									if ( $background_retina['image'] != null )
									{
										echo $background_retina['image'];
									} else {
										echo get_stylesheet_directory_uri().'/img/utlr_simulador_examen_profesionales.jpg';
									}
								?>");
			}
		}
	</style>
<?php if(wpmd_is_notdevice()) { ?>
	<!--[if IE 8]><link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/styleIE8.css" media="all" /><![endif]-->
<?php };?>
<?php if(wpmd_is_ios()) { // Los íconos para iPad y Mac de Apple. ?>	
	<!-- favicon para Apple -->
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-152x152.png" />
<?php };?>
	<!-- Favicon General -->
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/img/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/img/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/img/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/img/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/img/favicon-128.png" sizes="128x128" />
	<!-- <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory');?>/favicon.ico" /> -->
<?php wp_head();?>
	<!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
</head>
<body <?php body_class();?>>
<div class="fondo">
<div class="fondo--transparente">
	<header class="header">
	
	<!-- El logotipo -->
	<?php if ( is_home() ) { ?>

		<div class="logo hidden"></div>

		<!-- Switcher de idiomas -->
		<div class="switcher switcher--home">
			<?php if ( function_exists( 'the_msls' )) the_msls();?>
			<!-- <a class="active" href="#" hreflang="#">Español</a>
			<a href="#" hreflang="#">English</a> -->
		</div>

	<?php } else { ?>

		<!-- <div class="logo">
			<a href="<?php bloginfo('url');?>">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/logo-webtranslations-6.png" />
			</a>
		</div> -->
		<div class="logo">
			<?php $logo_uploader =  of_get_option('logo_uploader',''); ?>
			<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name')?>">
				<?php if ($logo_uploader) { ?>
				<img src="<?php echo $logo_uploader ?>" />
				<?php } else { 
				bloginfo('name');
				};?>
			</a>
		</div>

		<!-- Switcher de idiomas -->
		<div class="switcher">
			<?php if ( function_exists( 'the_msls' )) the_msls();?>
		</div>
	<?php } ?>

		
		<!-- El botón menú -->
		<div class="menu">
			<a href="#" id="menu">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</div>
		
		<!-- Menú de navegación principal -->
		<nav class="nav" id="nav_home">
			<?php 
			$default = array(
				'container'			=>	'',
				'container_class'	=>	'nav--listado',
				'depth'				=>	3,
				'theme_location'	=>	'header_nav',
				'items_wrap'		=>	'<ul id="header_nav" class="nav--listado">%3$s</ul>',
				'walker'			=>	'',
				'fallback_cb'		=>	'wp_page_menu'
			);		
			wp_nav_menu($default);
			?>
		</nav>
		<div class="clearboth"></div>
	</header>
	<section>
		<article>
			<?php if(wpmd_is_notdevice()) { // Para comprobar si es o no moderno el browser ?>
			<!--[if lt IE 8]>
				<p class="browserupgrade">Estás usando una <strong>versión muy vieja</strong> de navegador web. Por favor, <a href="http://browsehappy.com/">actualizá tu navegador con las nuevas versiones de Firefox, Google Crhome, Opera, etc...</a> y solo así se mejorará tu experiencia en la web. Hazme caso.</p>
				<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
			<![endif]-->
			<?php };?>
		</article>
	</section>