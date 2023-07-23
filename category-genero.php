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


						<div class="col-md-12">
							<div class="row">

								<?php $posts = query_posts( $query_string . '&orderby=title&order=asc' ); ?>
								 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

									<div class="col-md-3">
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


<?php get_footer();?>