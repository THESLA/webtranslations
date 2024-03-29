	<!-- El footer propiamente dicho de la web -->
	<footer class="main__footer">
		<div class="redes_sociales">
			<ul>
			<?php
				$facebook_contact = of_get_option('facebook_contact','');
				$twitter_contact = of_get_option('twitter_contact','');
				$linkedin_contact = of_get_option('linkedin_contact', '');
				$google_plus_contact = of_get_option('google_plus_contact','');
				$email_contact = of_get_option('email_contact','');

				if($linkedin_contact)
				{
				echo '
					<li>
						<a title="LinkedIn" target="_blank" class="blanco redondo icon-linkedin2" href="http://' . $linkedin_contact . '"></a>
					</li>';
				}

				if($facebook_contact)
				{
				echo '
					<li>
						<a title="Facebook" target="_blank" class="blanco redondo icon-facebook" href="http://' . $facebook_contact . '"></a>
					</li>';
				}

				if($twitter_contact)
				{
				echo '
					<li>
						<a title="Twitter" target="_blanck" class="blanco redondo icon-twitter" href="http://' . $twitter_contact . '"></a>
					</li>';
				}

				if($google_plus_contact)
				{
				echo '
					<li>
						<a rel="" title="Google+" target="_blank" class="blanco redondo icon-google-plus" href="http://' . $google_plus_contact . '"></a>
					</li>';
				}

				if($email_contact)
				{
				echo '
					<li>
						<a title="E-Mail" target="_blank" class="blanco redondo icon-mail" href="mailto:' . $email_contact . '"></a>
					</li>';
				}
			?>
			</ul>
		</div>
		<div class="copyright">
			&copy; <a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a>
			<?php echo date("Y");?> | <?php _e('Todos los derechos reservados', 'webtranslations');?>
		</div>
		<div class="copyright">
			<?php _e('Desarrollado por', 'webtranslations');?> <a href="http://www.webmoderna.com.ar" target="_blank">WebModerna</a>
		</div>

		<a id="ir_arriba" class="gotop" href="#"></a>

		<div class="data_fiscal">
		<?php $data_fiscal = of_get_option('data_fiscal', ''); ?>
			<article>
				<p>
					<?php echo $data_fiscal;?>
				</p>
			</article>
		</div>
	</footer>
</div><!-- .fondo-transparente -->
</div><!-- .fondo -->
<?php
/*
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-40089469-1']);
	_gaq.push(['_trackPageview']);

	(function()
	{
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
*/
?>
<?php wp_footer();?>
<!-- scripts generales -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/scripts.js" async ></script>
<?php if(wpmd_is_notdevice()) { ?>
<!--[if IE 8]>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/html5.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/respond.js"></script>
<![endif]-->
<?php };
$google_analitycs = of_get_option('google_analitycs', '');
if ( $google_analitycs != null )
{
	echo '<script type="text/javascript">'.$google_analitycs.'</script>';
};?>
</body>
</html>