<?php /* Template Name: Catalogos Genero*/ ?>
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
						<h1 class="tituse1"><?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?></h1>
						<!--<?php echo '<h1>'.$varCurrentItem.'</h1>'; ?>-->

						<div class="row justify-content-center">
					<div class="col-md-8">
						<p><strong>Filtrar por matería</strong></p>
						<?php
							$current_category = get_queried_object();
							$terms = wp_dropdown_categories(array(
									'taxonomy' => 'Genero',
									'exclude'=> "26,2,4,6,11",
									'hierarchical' => 1,
									//'show_option_none' => "Filtrar",
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
						<p><strong>Buscar por obra</strong></p>
						<input type="search" id="input-search" autocapitalize="none"  placeholder="Escriba la obra a buscar..." class="card-filter form-control">
					</div>
				</div>

				<div class="separar"></div>


						<div class="col-md-12">
							<div class="row">

								<?php $posts = query_posts( $query_string . '&orderby=title&order=asc' ); ?>
								 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

									<div class="col-md-3 book-search mb-2">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', ['class' => 'img_il_l', 'title' => 'full']); ?></a>
									<p class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
								</div>

								<?php endwhile; ?>
								<?php else : ?>
									<p>Lo sentimos no hay obras en esta categoría. Intente más tarde</p>
								<?php endif; ?>
							</div>
						</div>

						<br/><br/><br/>
					</div>
				</div>

			</section>
			<!--Section: Nosotros-->
		</div>

		


	</main>
	<!--Main layout-->

	<script>
		const d = document;

		

		function searchFilter(input, selector){
			d.addEventListener("keyup", (e) => {
				if(e.target.matches(input)){
					//console.log(e.key);
					const minusculas = e.target.value.toLowerCase();
					console.log(minusculas);
					//console.log(e.target.value)
					d.querySelectorAll(selector).forEach(el => el.textContent.includes(e.target.value)
					/*d.querySelectorAll(selector).forEach(el => el.textContent.toLowerCase().includes(e.target.value)*/
						? el.classList.remove("filter")
						: el.classList.add("filter")
					)				
				}
			});
		}

		searchFilter(".card-filter", ".book-search");
		
	</script>


<?php get_footer();?>