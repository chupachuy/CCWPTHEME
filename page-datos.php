<?php /* Template Name: Datos */ ?>

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
                        <h1 class="tituse1">Datos</h1>

                        <br/>

                    
                        <table class="table table-striped table-data">
                            <thead>
                                <tr>
                                  <th scope="col">Titulo</th>
                                  <th scope="col">Epub</th>
                                  <th scope="col">pdf</th>
                                  <th scope="col">Serie</th>
                                  <th scope="col">iTunes</th>
                                  <th scope="col">Amazon</th>
                                  <th scope="col">Playbooks</th>
                                  <th scope="col">Gandhi</th>
                                  <th scope="col">Ink it</th>
                                  <th scope="col">Dictamen 1</th>
                                  <th scope="col">Dictamen 2</th>
                                  <th scope="col">Materia</th>
                                  <th scope="col">ISBN</th>
                                  <th scope="col">DOI</th>
                                  <th scope="col">Paginas</th>
                                  <th scope="col">Dimesiones</th>
                                  <th scope="col">Edicion</th>
                                  <th scope="col">Palabras Clave</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php query_posts(array(
                                    'post_type' => 'libros',
                                    'showposts' => -1
                                    )); 
                                    ?>
                                 <?php if(have_posts() ) { while (have_posts()) : the_post(); ?>
                                <tr>
                                    <td><?php the_title(); ?></td>
                                    <td><?php if (get_post_meta( get_the_ID(), 'download_book', true ) ) { ?>
                                            <strong>OK</strong><?php } ?></td>
                                    <td><?php if (get_post_meta( get_the_ID(), 'download_pdf', true ) ) { ?>
                                            <strong>OK</strong><?php } ?></td>
                                    <!--<td><?php if (get_post_meta( get_the_ID(), 'coleccion_term', true ) ) { ?>
                                            <?php echo get_post_meta($post->ID, 'coleccion_term', true); ?><?php } ?></td>-->
                                    <td><?php echo get_the_term_list( $post->ID, 'Genero', '', ', ', '' ); ?></td>
                                    <td><?php if (get_post_meta( get_the_ID(), 'ibooks_url', true ) ) { ?>
                                            <strong>OK</strong><?php } ?></td>
                                    <td><?php if (get_post_meta( get_the_ID(), 'amazon_url', true ) ) { ?>
                                            <strong>OK</strong><?php } ?></td>
                                    <td><?php if (get_post_meta( get_the_ID(), 'playbooks_url', true ) ) { ?>
                                            <strong>OK</strong><?php } ?></td>
                                    <td><?php if (get_post_meta( get_the_ID(), 'sending_stores', true ) ) { ?>
                                            <strong>OK</strong><?php } ?></td>
                                    <td><?php if (get_post_meta( get_the_ID(), 'gandhi_url', true ) ) { ?>
                                            <strong>OK</strong><?php } ?></td>
                                    <td><?php if (get_post_meta( get_the_ID(), 'dictamen_1', true ) ) { ?>
                                            <a href="<?php echo get_post_meta($post->ID, 'dictamen_1', true); ?>" target="_blank"><strong>dictamen 1</strong><?php } ?></a></td>
                                    <td><?php if (get_post_meta( get_the_ID(), 'dictamen_2', true ) ) { ?>
                                            <a href="<?php echo get_post_meta($post->ID, 'dictamen_2', true); ?>" target="_blank"><strong>dictamen 2</strong><?php } ?></a></td>
                                       <td><?php echo get_the_term_list( $post->ID, 'Genero', '', ', ', ' '); ?></td>
                                       
                                 <td><?php echo get_post_meta($post->ID, 'isbn', true); ?></td>
                                 <td><?php echo get_post_meta($post->ID, 'doi', true); ?></td>
                                 <td><?php echo get_post_meta($post->ID, 'paginas_impreso', true); ?></td>
                                 <td><?php echo get_post_meta($post->ID, 'medidas_impreso', true); ?></td>
                                 <td><?php echo get_post_meta($post->ID, 'edicion', true); ?></td>
                                 <td><?php echo get_the_term_list( $post->ID, 'Keywords', '', ', ', ''); ?></td>
                                        
                                            
                                </tr>
                                <?php endwhile; } wp_reset_query(); ?>
                                
                              </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!--Section: Nosotros-->
        </div>



    </main>
    <!--Main layout-->



<?php get_footer(); ?>