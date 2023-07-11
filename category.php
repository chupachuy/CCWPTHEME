<?php get_header(); ?>

<main>

	<div class="container">
		<div class="row">
			<div class="col-md-12"><br/><br/><br/><br/></div>
		</div>
	</div>
	<div class="separar"></div>
	<div class="separar"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text_tit_blog"><?php single_cat_title(); ?></h1>
			</div>
		</div>
	</div>
	<div class="separar"></div>
	<div class="container">
		
		<div class="row">
			<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
				<div class="post-container">
			      <div class="post">
			        <p class="date"><?php echo get_the_date('D M j'); ?></p>
			        <h1 class="tituse1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			        <div class="post-content">
			          <?php the_excerpt(); ?>
			          <a href="<?php the_permalink(); ?>">Leer más</a>
			        </div>
			      </h1></div>
			      <hr />
			  </div>
			<?php  endwhile; endif ?> 
		</div>
		  
	</div>
	<div class="separar"></div>
	<div class="separar"></div>

</main>


<?php get_footer(); ?>