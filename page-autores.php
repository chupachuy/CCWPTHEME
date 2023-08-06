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
      <div class="row justify-content-center">
        <div class="col-md-8">
        <input type="search" id="input-search" autocapitalize="none"  placeholder="Escriba un nombre de autor.." class="card-filter form-control">
        </div>
      </div>

      </div>
    </section>
  </div>

  <div class="separar"></div>

      
<div class="container">
  <div class="row">
    <?php foreach (get_terms('Autores') as $cat) : ?>

      <div class="col-md-6 book-search">
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