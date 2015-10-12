	<!-- El footer propiamente dicho de la web -->
	<footer class="main__footer">
		<div class="redes_sociales">
			<ul>
			<?php 
				$facebook_perfil = get_the_author_meta( 'facebook_perfil' );
				if ( $facebook_perfil && $facebook_perfil != '' )
				{
					echo '<li><a class="blanco redondo icon-facebook" href="' . esc_url($facebook_perfil) . '" rel="author" target="_blank"></a></li>';
				}

				$google_mas_perfil = get_the_author_meta( 'google_mas_perfil' );
				if ( $google_mas_perfil && $google_mas_perfil != '' )
				{
					echo '<li><a class="blanco redondo icon-google-plus" href="' . esc_url($google_mas_perfil) . '" rel="author" target="_blank"></a></li>';
				}

				$twitter_perfil = get_the_author_meta( 'twitter_perfil' );
				if ( $twitter_perfil && $twitter_perfil != '' )
				{
					echo '<li><a class="blanco redondo icon-twitter" href="' . esc_url($twitter_perfil) . '" rel="author" target="_blank"></a></li>';
				}

				$linkedin_perfil = get_the_author_meta( 'linkedin_perfil' );
				if ( $linkedin_perfil && $linkedin_perfil != '' )
				{
					echo '<li><a class="blanco redondo icon-linkedin2" href="' . esc_url($linkedin_perfil) . '" rel="author" target="_blank"></a></li>';
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
	</footer>
</div><!-- .fondo-transparente -->
</div><!-- .fondo -->
	
<!-- scripts generales -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/scripts.js"></script>
<?php if(wpmd_is_notdevice()) { ?>	
<!--[if IE 8]>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/html5.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/respond.js"></script>
<![endif]-->
<?php };?>
<!--<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-40089469-1']);
	_gaq.push(['_trackPageview']);

	(function()
	{
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>-->
<?php wp_footer();?>
</body>
</html>