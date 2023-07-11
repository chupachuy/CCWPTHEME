<div class="siderbar">
	<div class="separar"></div>
	<div class="h3">Últimas noticias</div>
	<hr>
	<div class="loop-news">
		<?php

		 // The Query
		 query_posts( array ( 'noticias' => 'A', 'posts_per_page' => -1 ) ); ?>
		 <ul class="list-group">
		<?php while ( have_posts() ) : the_post(); ?>
		   <li class="list-group-item">
		     <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		 </li>

		 <?php endwhile; ?>
		 </ul>
		 <?php wp_reset_query();

		 ?>
		
	</div>
</div>