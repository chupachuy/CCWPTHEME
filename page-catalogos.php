<?php /* Template name: Catalogos */ ?>
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
				<div class="row justify-content-center">
					<div class="col-md-8">
						<p><strong>Filtrar por matería</strong></p>
						<?php
							$current_category = get_queried_object();
							$terms = wp_dropdown_categories(array(
									'taxonomy' => 'Genero',
									'exclude'=> "26,2,4,6,11",
									'hierarchical' => 1,
									'show_option_none' => "Filtrar",
									'option_none_value' => "",
									'name' => 'news_cat_name',
									'id' => 'cat_search',
									'class' => 'form-control',
									'value_field' => 'slug',
									'post_parent' => 0,
									'selected' => $current_category->slug,
							));
						?>
						<script>

							const search = document.getElementById("cat_search");

							search.onchange = function() {
								//alert("cambio");
								window.location = "<?php echo esc_url(home_url('/')); ?>Genero/" + $(this).val();
							};

						</script>
					</div>
				</div>

				<div class="separar"></div>
				<div class="row justify-content-center">
					<div class="col-md-8">
						<p><strong>Buscar por autor</strong></p>
						<input type="search" id="input-search" autocapitalize="none"  placeholder="Escriba la obra a buscar..." class="card-filter form-control">
					</div>
				</div>

				<div class="separar"></div>


				<div class="row">
					<?php
					$the_query = new WP_Query( array(
						'post_type' => 'libros',
						'posts_per_page'    => '-1',
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
						<div class="col-md-3 book-search">
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