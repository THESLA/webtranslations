<?php
/*
* Template Name: Contacto 2
* @package WordPress
* @subpackage webtranslations
* @since webtranslations 1.0
*/
?>
	<?php
		$email_contact = of_get_option('email_contact', '');

		if ( isset( $_POST['boton'] ) )
		{
			if ( $_POST['nombre'] == '' )
			{
				$error1 = '<span class="error">'.__('Ingrese su nombre y apellido completo', 'webtranslations').'</span>';
			}
			else if ( $_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email']) )
			{
				$error2 = '<span class="error">'.__('Ingrese un email correcto', 'webtranslations').'</span>';
			}
			else if ( $_POST['asunto'] == '' )
			{
				$error3 = '<span class="error">'.__('Ingrese un teléfono correcto', 'webtranslations').'</span>';
			}
			else if ( $_POST['mensaje'] == '' )
			{
				$error4 = '<span class="error">'.__('Tiene que ingresar un mensaje', 'webtranslations').'</span>';
			}
			else
			{
				$dest = 'info@webmoderna.com.ar'; // Solo una prueba
				// $dest = $email_contact;			// Email de destino
				$nombre = $_POST['nombre'];		// Nombre de quien envia
				$email = $_POST['email'];		// Email de quien envia
				$asunto = $_POST['asunto'];		// Asunto
				$cuerpo = $_POST['mensaje'];	// Cuerpo del mensaje

				// Cabeceras del correo
				$headers  = "From: $nombre $email\r\n"; //Quien envia?
				$headers .= "X-Mailer: PHP5\n";
				$headers .= 'MIME-Version: 1.0' . "\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //

				if ( mail ( $dest, $asunto, $cuerpo, $headers ) )
				{
					$result = '<div class="result_ok">'.__('Mensaje enviado correctamente :)', 'webtranslations').'</a>';
					// si el envio fue exitoso reseteamos lo que el usuario escribio:
					$_POST['nombre'] = '';
					$_POST['email'] = '';
					$_POST['asunto'] = '';
					$_POST['mensaje'] = '';
				}
				else
				{
					$result = '<div class="result_fail">'.__('Hubo un error al enviar el mensaje :-(', 'webtranslations').'</a>';
				}
			}
		}
	?>
<?php get_header(); rewind_posts(); if ( have_posts() ) : while ( have_posts() ) :?>
					<!-- Cuerpo principal de la web -->
	<main class="fondo_color">
		<section>
			<header class="heading">
				<h1>
					<?php the_title();?>
					<span class="icon-mail left"></span>
				</h1>
			</header>
			<article>
				<?php the_post();?>
				<div class="estilizacion">
					<div role="form"  dir="ltr">
						<form class='contacto' method='POST' action=''>
							<fieldset>
								<legend><?php _e('Datos personales', 'webtranslations');?></legend>

								<input type="text" name="nombre" class="nombre" placeholder="<?php _e('Nombre y Apellido:', 'webtranslations');?>" maxlength="40" value="<?php echo $_POST['nombre'];?>" />
								<div><?php echo $error1 ?></div>

								<input type="email" placeholder="Email:" class="email" name="email" maxlength="60"  value="<?php echo $_POST['email'];?>" />
								<div><?php echo $error2;?></div>

								<input type="tel" placeholder="<?php _e('Teléfono (Optativo):', 'webtranslations');?>" class="asunto" name="asunto" maxlength="15" value="<?php echo $_POST['asunto']; ?>" />
								<div><?php echo $error3;?></div>
							</fieldset>

							<fieldset>
								<legend for="mensaje"><?php _e('Detalles', 'webtranslations');?></legend>
								<?php the_content();?>
								<textarea class="mensaje" rows="5" name="mensaje" placeholder="<?php _e('Escriba aquí su mensaje') ?>"><?php echo $_POST['mensaje'];?></textarea>
								<div><?php echo $error4;?></div>
							</fieldset>

							<div>
								<button type="submit" class="boton" name="boton">
									<span class=" icon-check-alt right"></span>
									<?php _e('Enviar', 'webtranslations');?>
								</button>

								<button type="reset" class="boton">
									<span class="icon-x-altx-alt right"></span>
									<?php _e('Limpiar', 'webtranslations');?>
								</button>
							</div>
							<div><?php echo $result;?></div>
						</form>
					</div>
				</div>
			</article>
		</section>




		<?php endwhile; ?>
		<?php else: ?>
		<section class="columna--right">
			<article>
				<h2><?php _e('No hay nada publicado', 'webtranslations') ?></h2>
			</article>
		</section>
		<?php endif; ?>
	</main>

<?php get_footer();?>