<?php
/*
Template Name: Autores
*/
?>
<?php get_header(); ?>
<!--Main layout-->
<main>
  <div class="container">

    <!-- SECCIÓN INFO. AUTOR -->
    <section class="mt-5 wow fadeIn">
      <div class="row">
        <div class="col-md-12"><br/><br/><br/><br/></div>
      </div>
      <div class="row">
        <div class="col-md-12"><br/></div>
      </div>

      <!--<div class="row">
        <div class="col-md-12">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">A</a></li>
              <li class="page-item"><a class="page-link" href="#">B</a></li>
              <li class="page-item"><a class="page-link" href="#">C</a></li>
              <li class="page-item"><a class="page-link" href="#">D</a></li>
              <li class="page-item"><a class="page-link" href="#">E</a></li>
              <li class="page-item"><a class="page-link" href="#">F</a></li>
              <li class="page-item"><a class="page-link" href="#">G</a></li>
              <li class="page-item"><a class="page-link" href="#">H</a></li>
              <li class="page-item"><a class="page-link" href="#">I</a></li>
              <li class="page-item"><a class="page-link" href="#">J</a></li>
              <li class="page-item"><a class="page-link" href="#">K</a></li>
              <li class="page-item"><a class="page-link" href="#">L</a></li>
              <li class="page-item"><a class="page-link" href="#">M</a></li>
              <li class="page-item"><a class="page-link" href="#">N</a></li>
              <li class="page-item"><a class="page-link" href="#">O</a></li>
              <li class="page-item"><a class="page-link" href="#">P</a></li>
              <li class="page-item"><a class="page-link" href="#">Q</a></li>
              <li class="page-item"><a class="page-link" href="#">R</a></li>
              <li class="page-item"><a class="page-link" href="#">S</a></li>
              <li class="page-item"><a class="page-link" href="#">T</a></li>
              <li class="page-item"><a class="page-link" href="#">U</a></li>
              <li class="page-item"><a class="page-link" href="#">V</a></li>
              <li class="page-item"><a class="page-link" href="#">W</a></li>
              <li class="page-item"><a class="page-link" href="#">X</a></li>
              <li class="page-item"><a class="page-link" href="#">Y</a></li>
              <li class="page-item"><a class="page-link" href="#">Z</a></li>
            </ul>
          </nav>
        </div>-->
      </div>
    </section>
  </div>

      
<div class="container">
  <div class="row">
    <?php foreach (get_terms('Autores') as $cat) : ?>

      <div class="col-md-6">
          <div class="row">
            <div class="col-md-4 images-autor"><!-- IMG AUTOR -->
              <img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" />
            </div><!--/. IMG AUTOR -->
            <div class="col-md-8"><!-- INFO. AUTOR -->
              <p class="text_nom_autor" style="margin-top: -0.26em;"><a href="<?php echo get_term_link($cat->term_id, 'Autores'); ?>"><?php echo $cat->name; ?></a></p>
              <p class="autor-info"><?php echo $cat->description; ?></p>
              <p class="text-right"><a href="<?php echo get_term_link($cat->term_id, 'Autores'); ?>">Leer más</a></p>
            </div><!--/. INFO. AUTOR -->
          </div>
        </div>

    <?php endforeach; ?>
  </div>
</div>
      

        
      

    <!--/. SECCIÓN INFO. AUTOR -->

  <div class="separar"></div>
</main>
<?php get_footer(); ?>