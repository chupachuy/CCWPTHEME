<?php /* Template Name: Catalogos */ ?>
<?php get_header(); ?>
<!--Main layout-->
	<main>
		<div class="container">

			<!--Section: Nosotros-->
			<section class="mt-5 wow fadeIn">
				<div class="row">
					<div class="col-md-12">
						<br/><br/><br/><br/><br/>
					</div>
					<div class="col-md-12">
						<h1 class="tituse1">Catálogo de acceso abierto</h1>
						<!--<?php echo '<h1>'.$varCurrentItem.'</h1>'; ?>-->
						<p class="pgen">Este repositorio de acceso libre es una plataforma de libros electrónicos que permite que estén disponibles en cualquier dispositivo, así como rastrear el Impacto de la Investigación a través de métricas de uso y brindar a los autores las herramientas para aprovechar al máximo su investigación. Asimismo, está bien posicionado en los buscadores.</p>
					</div>
				</div>

				<div class="separar"></div>
				<div class="separar"></div>
				<div class="separar"></div>

				<div class="row">
					<?php
					$the_query = new WP_Query( array(
						'post_type' => 'libros',
						'tax_query' => array(
							array(
								'taxonomy' => 'Genero',
								'field' => 'slug',
								'terms' => array( 'proximamente' ),
								'operator' => 'NOT IN',
							),
						)
					));
					?>
					<?php
					while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="col-md-3">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', ['class' => 'img_il_l', 'title' => 'full']); ?></a>
							<p class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
						</div>
					<?php endwhile; ?>
				</div>
				<div class="separar"></div>
				<div class="separar"></div>
				<div class="separar"></div>

			</section>
			<!--Section: Nosotros-->
		</div>

		


	</main>
	<!--Main layout-->


<?php get_footer();?>