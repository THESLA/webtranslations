<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
/*function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}*/
function optionsframework_option_name() {
	// Nombre de la plantilla
	$themename = wp_get_theme();
	$themename = preg_replace("/W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'webtranslations'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */


function optionsframework_options()
{
	//Pestaña Configuración general
	$options[] = array(
	'name' => __('Configuración General', 'options_framework_theme'),
	'type' => 'heading');

	//Cambio del logo
	$options[] = array(
	'name' => __('Logotipo del Sitio Web', 'options_check'),
	'desc' => __('Selecciona el logo a mostrar en la web, tamaño 160px x 160px.', 'options_check'),
	'id' => 'logo_uploader',
	'type' => 'upload');
	// Trae el logo desde el panel de administración, si no hay nada muestra el segundo parámetro
	

	// Background normal del sitio web
	$options[] = array(
	'name' => __('Color de Fondo e Imagen de Fondo de la web', 'options_framework_theme'),
	'desc' => __('Selecciona una imagen grande de 1300px mínimo de ancho por 900px ó más de alto. También elegí un color de fondo.', 'options_framework_theme'),
	'id' => 'background_de_la_web',
	'type' => 'background',
	'class' => 'of-background-properties');

	// Background Retina Display del sitio web
	$options[] = array(
	'name' => __('Color de Fondo e Imagen Retina Display de Fondo de la web', 'options_framework_theme'),
	'desc' => __('Selecciona una imagen grande de 2600px mínimo de ancho por 1800px ó más de alto. También elegí un color de fondo.', 'options_framework_theme'),
	'id' => 'background_retina_de_la_web',
	'type' => 'background',
	'class' => 'of-background-properties');

	
	/*====================================================================================*/
	/* =================== Pestaña información de contacto ============================== */
	$options[] = array(
	'name' => __('Información de contacto', 'options_framework_theme'),
	'type' => 'heading' );

	// Facebook
	$options[] = array(
		'name' => __('Facebook', 'options_framework_theme'),
		'desc' => __('Introduzca el enlace a Facebook.', 'options_framework_theme'),
		'id' => 'facebook_contact',
		'std' => '',
		'class' => '',
		'placeholder' => 'www.facebook.com/usuario',
		'type' => 'text'
	);


	// Twitter
	$options[] = array(
		'name' => __('Twitter', 'options_framework_theme'),
		'desc' => __('Introduzca su enlace a Twitter.', 'options_framework_theme'),
		'id' => 'twitter_contact',
		'std' => '',
		'placeholder' => 'www.twitter.com/usuario',
		'class' => '',
		'type' => 'text'
	);
	
	// LinkedIn
	$options[] = array(
		'name' => __('LinkedIn', 'options_framework_theme'),
		'desc' => __('Introduzca su enlace al perfil de LinkedIn.', 'options_framework_theme'),
		'id' => 'linkedin_contact',
		'std' => '',
		'placeholder' => 'www.linkedin.com/usuario',
		'class' => '',
		'type' => 'text'
	);
	
	// Google+
	$options[] = array(
		'name' => __('Google+', 'options_framework_theme'),
		'desc' => __('Introduzca su enlace a Google+.', 'options_framework_theme'),
		'id' => 'google_plus_contact',
		'std' => '',
		'placeholder' => 'plus.google.com/usuario',
		'class' => '',
		'type' => 'text'
	);

	// Email de contacto
	$options[] = array(
		'name' => __('E-mail de contacto', 'options_framework_theme'),
		'desc' => __('Introduzca el Email de contacto, se mostrará al pie del sitio web en un ícono.', 'options_framework_theme'),
		'id' => 'email_contact',
		'std' => '',
		'placeholder' => 'tu-mail@lo-que-sea.com.ar',
		'class' => '',
		'type' => 'text'
	);
	
	$facebook_contact = of_get_option('facebook_contact','');
	$twitter_contact = of_get_option('twitter_contact','');
	$linkedin_contact = of_get_option('linkedin_contact', '');
	$google_plus_contact = of_get_option('google_plus_contact','');
	$email_contact = of_get_option('email_contact','');
	
	/* para guardar los campos en variable y para mostrarlos con un condicional
	<ul>
	   <?php
			if($tel_contact){echo "<li><strong>Teléfono:</strong>" . $tel_contact . "</li>";}
			if($email_contact){ echo "<li><strong>Email:</strong>" . $email_contact . "</li>";}
			if($dir_contact){ echo"<li><strong>Dirección:</strong>" . $dir_contact . "</li>";}
			if($cp_contact){echo"<li><strong>Cp:</strong>" . $cp_contact . "</li>";}
	   ?>
	</ul>

	*/

	return $options;
}