<?php get_header(); ?>

<!--Main layout-->
	<main>

		<div class="separar"></div>
		<div class="separar"></div>
		<div class="separar"></div>

		<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

		<div class="container title-blog-header">

		<div class="image-blog-header">
			<div class="row">
				<div class="col-md-3 mainimage-blog">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="col-md-9 padre">
					<div class="hijo">
						<h1 class="tituse1"><?php the_title(); ?></h1>
						<p class="text_autores">Por: <?php if((get_post_meta( get_the_ID(), 'author_blog', true ) )){ ?>
	                                <?php echo get_post_meta($post->ID, 'author_blog', true); ?>
	                            <?php } else { ?>
	                                Comunicación Cientifica.
	                    <?php } ?></p>
					</div>
				</div>
			</div>
		</div>

		<div class="separar"></div>
		<div class="separar"></div>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9">
					<div class="blog pgen text-justify">
						<?php the_content(); ?>
					</div>
					<div class="separar"></div>
					<div class="social-sharing">
						<?php get_template_part('template', 'sharing-box'); ?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="blog pgen text-justify">
						<?php get_sidebar();?>
					</div>
				</div>
			</div>
		</div>

		<hr />

		<div class="separar"></div>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 blog">
					<?php comments_template(); ?>
				</div>
			</div>
		</div>

		<div class="separar"></div>
		<div class="separar"></div>
		<div class="separar"></div>


		<?php  endwhile; endif ?>
	</main>
	<!--Main layout-->

<?php get_footer(); ?>