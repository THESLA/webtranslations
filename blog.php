<?php
/**
* Template Name: Blog
* @package WordPress
* @subpackage webtranslations
* @since webtranslations 1.0
*/
get_header();

rewind_posts(); 
// WP_Query arguments
$args = array (
'post_type' => array( 'post' ),
);

// The Query
$query = new WP_Query( $args ); ?>


<!-- Cuerpo principal de la web -->
	<main class="fondo_color">
		<section class="left">
			<header class="heading">
				<h1>
					<?php _e('Blog', 'webtranslations');?>
					<span class="icon-profile left"></span>
				</h1>
			</header>
			
			<div class="columnas__2">
			<?php
			// The Loop
			if ( $query->have_posts() )
			{
				while ( $query->have_posts() )
				{
					$query->the_post();
					// do something
			 ?>

				<article class="Panel-small">
					<header>
						<h3 class="Panel-small--titulo">
							<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
						</h3>
						<div class="elementos_post"><?php the_date();?>
							<span class="icon-user2 left right"></span><?php the_author();?>
						</div>
					</header>
					
					<figure>
						<a href="<?php the_permalink();?>">
						<?php if( has_post_thumbnail() ) { the_post_thumbnail( 'custom-thumb-100-100' ); } else { ?>
							<img src="<?php bloginfo('stylesheet_directory');?>/img/logo-webtranslations-6.png" alt="algo" />
						<?php };?>
						</a>
					</figure>

					<div class="Panel-small--contenido">
						<?php the_excerpt();?>
						<p><a class="leer_mas" href="<?php the_permalink(); ?>"><?php _e('Leer más', 'webtranslations');?></a></p>
					</div>
					<footer>

						<?php if ( get_the_tags() != '' ) { ?>
						<div class="Panel-small--tag">
							<span class="icon-price-tag right"></span><?php _e('Etiquetas:', 'webtranslations');?>
							<ul>
								<?php the_tags( '<li>', ', ', '</li>' ); ?>
							</ul>
						</div>
						<?php } ?>

						<div class="Panel-small--tag">
							<ul>
								<li><span class="icon-folder right"></span><?php _e('Categorías: ', 'webtranslations');?></li>
								<?php the_category( '<li>', '</li>', '' ); ?>
							</ul>
						</div>
					</footer>
				</article>
				
				<?php } ?>
			
			</div>
		</section>
		
		<?php	} else { 
				// no posts found ?>

		<section>
			<article>
				<h2>
					<?php _e('No hay entradas del blog publicadas.', 'webtranslations');?>
				</h2>
			</article>
		</section>

		<?php	}
			// Restore original Post Data
			wp_reset_postdata();?>
		<section>
			<div class='pagination'>
				<?php if ( function_exists("pagination") ) { pagination(); } ?>
			</div>
		</section>
		
	</main>

<?php get_footer();?>