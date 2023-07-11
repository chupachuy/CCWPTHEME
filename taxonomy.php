<?php get_header(); ?>
<!--Main layout-->
<main>
    <div class="container">
        <!-- SECCIÓN INFO. AUTOR -->
        <section class="mt-5 wow fadeIn">
            <div class="row">
                <div class="col-md-12"><br /><br /><br /><br /></div>
            </div>
            <div class="row">
                <div class="col-md-12"><br /></div>
            </div>
            <div class="row">
                <div class="col-md-4 images-autor">
                    <!-- IMG AUTOR -->
                    <img src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>" class="autor-img">
                </div>
                <!--/. IMG AUTOR -->
                <div class="col-md-8" style="margin-top: 1.8em;">
                    <!-- INFO. AUTOR -->
                    <div class="text_nom_autor" style="margin-top: -0.26em;">
                        <h1><?php $tax = $wp_query->get_queried_object(); echo  $tax->name; ?></h1>
                    </div>
                    
                    <br>
                    <div class="text_info_autor">
                        <?php echo category_description(); ?>

                        <br clear="both">

                        <?php if(get_term_meta( get_queried_object()->term_id, 'autores_orcid', true )){ ?>
                             <img style="height: 40px; float: left; margin-right: 10px" src="<?php bloginfo('template_url'); ?>/img/orcid-og-image.png" alt="ORCID logo">
                        <h5 style="padding-top: .5rem"><a href="<?php echo get_term_meta( get_queried_object()->term_id, 'autores_orcid', true ); ?>" target="_blank"><?php echo get_term_meta( get_queried_object()->term_id, 'autores_orcid', true ); ?></a></h5>
                        <?php }else{ ?>
                            <p></p>
                        <?php } ?>
                       
                    </div>
                </div>
                <!--/. INFO. AUTOR -->
            </div>
        </section>
        <!--/. SECCIÓN INFO. AUTOR -->
        <!--SECCIÓN - TÍTULOS Y ART. PUBLI. -->
        <section class="mt-5 wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <!-- TAB "PESTAÑAS" - TÍTULOS Y ART. PUBLI. -->
                        <div class="row d-flex justify-content-center">
                            <!-- TAB "PESTAÑAS" -->
                            <div class="col-md-12">
                                <ul class="nav nav-tabs " id="myTab" role="tablist" style="width: 100%">
                                    <!-- "PESTAÑAS" - MENÚ -->
                                    <li class="nav-item" style="width: 25%; text-align: center;">
                                        <!-- "Secc. - TÍTULOS del AUTOR" -->
                                        <a class="nav-link text_tit_pest active" id="tit_autor" data-toggle="tab" href="#info_tit_autor" role="tab" aria-controls="home" aria-selected="true">Libros publicados</a>
                                    </li>
                                    <!--/. "Secc. - TÍTULOS del AUTOR" -->
                                    <li class="nav-item" style="width: 25%; text-align: center;">
                                        <!-- "Secc. - PUBLICACIONES del AUTOR" -->
                                        <a class="nav-link text_tit_pest" id="arti_publi_autor" data-toggle="tab" href="#info_arti_publi_autor" role="tab" aria-controls="profile" aria-selected="false">Artículos publicados</a>
                                    </li>
                                    <!--/. "Secc. - PUBLICACIONES del AUTOR" -->
                                    <li class="nav-item" style="width: 25%; text-align: center;">
                                        <!-- "Secc. - PUBLICACIONES del AUTOR" -->
                                        <a class="nav-link text_tit_pest" id="arti_men_med" data-toggle="tab" href="#info_arti_men_med" role="tab" aria-controls="profile" aria-selected="false"> Menciones de su nombre en Medios</a>
                                    </li>
                                    <!--/. "Secc. - PUBLICACIONES del AUTOR" -->
                                    <li class="nav-item" style="width: 25%; text-align: center;">
                                        <!-- "Secc. - PUBLICACIONES del AUTOR" -->
                                        <a class="nav-link text_tit_pest" id="arti_men_red" data-toggle="tab" href="#info_arti_men_red" role="tab" aria-controls="profile" aria-selected="false"> Menciones de su nombre en redes</a>
                                    </li>
                                    <!--/. "Secc. - PUBLICACIONES del AUTOR" -->
                                </ul>
                                <div class="tab-content paddTab" id="myTabContent">
                                    <!-- CONTENIDO CARRUSEL  -->
                                    <div class="tab-pane fade show active" id="info_tit_autor" role="tabpanel" aria-labelledby="home-tab">
                                        <!-- TÍTULOS del AUTOR -->
                                        
                                        <div class="row">
                                            <?php $posts = query_posts( $query_string . '&orderby=title&order=asc' ); ?>
                                            <?php if(have_posts() ) { while (have_posts()) : the_post(); ?>
                                            <!-- FILA 1 - TÍTULOS del AUTOR -->
                                            <div class="col-md-3" id="<?php echo $post->ID; ?>">
                                                <!-- PORTADA 1 -->
                                                <?php the_post_thumbnail('full', ['class' => 'img_il_l', 'title' => 'full']); ?>
                                                <p style="margin-top: 0.5em; color: #00A4E4;"><a href="<?php the_permalink(); ?>" class="text_ver_libro"><i class="fas fa-eye"></i><span style="margin-left: 0.5em;">Ver libro</span></a></p>
                                            </div>
                                            <!--/. PORTADA 1 -->
                                           <?php endwhile; } wp_reset_query(); ?>
                                        </div>
                                        <!--/. FILA 1 - TÍTULOS del AUTOR -->
                                        
                                        <div class="row">
                                            <!-- LÍNEA DIVISIÓN -->
                                            <div class="col-md-12">
                                                <hr style="color: #B2B2B2" />
                                            </div>
                                        </div>
                                        <!--/. LÍNEA DIVISIÓN -->
                                        <div class="row">
                                            <div class="col-md-12"><br /></div>
                                        </div>
                                    </div>
                                    <!--/. TÍTULOS del AUTOR -->
                                    <?php $posts = query_posts( $query_string . '&orderby=title&order=asc' ); ?>
                                    <?php if(have_posts() ) { while (have_posts()) : the_post(); ?>
                                    <div class="tab-pane fade" id="info_arti_publi_autor" role="tabpanel" aria-labelledby="profile-tab">
                                        <!-- Contenido AUTORES -->
                                    </div>
                                    <!--/. Contenido AUTORES -->
                                    <?php endwhile; } wp_reset_query(); ?>
                                    <div class="tab-pane fade" id="info_arti_men_med" role="tabpanel" aria-labelledby="profile-tab">
                                        <!-- Contenido AUTORES -->
                                        
                                    </div>
                                    <!--/. Contenido AUTORES -->
                                    <div class="tab-pane fade" id="info_arti_men_red" role="tabpanel" aria-labelledby="profile-tab">
                                        <!-- Contenido AUTORES -->
                                        
                                    </div>
                                    <!--/. Contenido AUTORES -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/. TAB "PESTAÑAS" - TÍTULOS Y ART. PUBLI. -->
            </div>
        </section>
        <!--/.SECCIÓN - TÍTULOS Y ART. PUBLI. -->
        <!-- SECCIÓN - ÍNDICE AUTORES -->
        <section class="mt-5 wow fadeIn" style="display: none;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"><br /><br /><br /><br /></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- LÍNEA DIVISIÓN -->
                        <hr style="color: #B2B2B2" />
                    </div>
                    <!--/. LÍNEA DIVISIÓN -->
                </div>
                <div class="row">
                    <div class="col-md-12"><br /></div>
                </div>
            </div>
        </section>
        <!--/.SECCIÓN - ÍNDICE AUTORES -->
    </div>
</main>


<!--Main layout-->
<?php get_footer(); ?>