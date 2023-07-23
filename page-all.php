<?php /* Template name: Todas las obras */ ?>
<?php get_header(); ?>
<!--Main layout-->
	<main>
		<div class="container">

			<!--Section: Nosotros-->
			<section class="mt-5">
				<div class="row">
					<div class="col-md-12">
						<br/><br/><br/><br/><br/>
					</div>
					<div class="col-md-12">
						<h1 class="tituse1">Catálogo Comunicación Científica</h1>
						<!--
						<p class="pgen">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ullam sunt iusto officia eos magnam ad inventore, veniam asperiores cumque blanditiis, velit facilis? Omnis quisquam doloremque beatae aliquam deleniti exercitationem?</p>-->
					</div>
				</div>

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

				<div class="row justify-content-center">
					<div class="col-md-8">
							<?php
								$args = array(
									'posts_per_page'    => '-1', 
									'orderby'           => 'title',
									'order'             => 'ASC',
									'post_type'         => 'libros',
								);
								$the_query = new WP_Query( $args );
									if ( $the_query->have_posts() ) :
								?>
								<select class="form-control" onchange="window.document.location.href=this.options[this.selectedIndex].value;">
									<option selected="selected">Selecciona una obra</option>
									<?php
									while ($the_query->have_posts()) : $the_query->the_post();
									?>
									<option value="<?php esc_url(the_permalink()); ?>"><?php esc_html(the_title()); ?></option>
									<?php endwhile; ?>
								</select>
							<?php endif; wp_reset_postdata(); ?>
					</div>
				</div>
				

				<div class="separar"></div>

				<div class="row">
					<?php
					$the_query = new WP_Query( array(
						'post_type' => 'libros',
						'posts_per_page' => -1,
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
						<div class="col-md-3 text-center book-search mb-2">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', ['class' => 'img_il_l', 'title' => 'full']); ?></a>
							<p class="mt-1 boldsp"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
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

		searchFilter(".card-filter", ".book-search")

		
	</script>


<?php get_footer();?>