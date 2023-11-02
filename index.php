<?php get_header(); ?>

<?php include('includes/banner.php'); ?>


    <!--Main layout-->
    <main>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br/><hr class="liPrin"><br/>
                        <h2 class="tituh2 t">Novedades</h2>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row justify-content-md-center">
                <div class="col-md-11">
                    <section class="mt-5">
                        <div class="row">
                        <?php
                                $args = array(
                                    'post_type' => 'Libros',
                                    'orderby' => 'DESC',
                                    'posts_per_page' => 30,
                                );
                                $the_query = new WP_Query( $args );
                        ?>
                           <?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="col-md-2 thumbnail-novedades">
                                <?php if((get_post_meta( get_the_ID(), 'acceso_restringido', true ) )){ ?>
                                    <div class="cont_img">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="view overlay">
                                            <?php the_post_thumbnail('full', ['class' => 'img_il_l', 'title' => 'images']); ?>
                                            <div class="mask flex-center rgba-red-strong-restringido text-center">
                                                <h3><strong>ACCESO<br>Restringido</strong></h3>
                                                <!--<img src="<?php bloginfo('template_url'); ?>/img/svg/open-access-seeklogo-white.svg">-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php }else{ ?>
                                <div class="cont_img">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="view overlay">
                                            <?php the_post_thumbnail('full', ['class' => 'img_il_l', 'title' => 'images']); ?>
                                            <div class="mask flex-center rgba-red-strong">
                                                <img src="<?php bloginfo('template_url'); ?>/img/svg/open-access-seeklogo-white.svg">
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <?php } ?>
                                <br>
                                <div class="ellipse two-lines info boldsp">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                                <?php include('includes/author-home.php'); ?>
                            </div>
                            <div class="separar"></div>
                            <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>
                    </section>
                    
                </div>
            </div>

            <!--Section: Novedades-->
            <!--Section: Novedades-->
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center"><a href="<?php bloginfo(); ?>/catalogo-completo" type="button" class="btn btn-primary waves-effect waves-light">Ver todos</a></p>
                </div>
                
            </div>
        </div>

        <br>
        <br>
        <br>
        

        <!-- PROSIMAMENTE -->

        <!--<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br/><hr class="liPrin"><br/>
                        <h2 class="tituh2 t">Próximamente</h2>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row justify-content-md-center">
                <div class="col-md-11">
                    <section class="mt-5">
                        <div class="row">
                            <?php
                                $the_query = new WP_Query( array(
                                    'post_type' => 'libros',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'Genero',
                                            'field' => 'slug',
                                            'terms' => array( 'novedades' ),
                                            'order' => 'ASC'
                                        ),
                                    )
                                ));
                                ?>
                            <?php if(have_posts() ) { while (have_posts()) : the_post(); ?>
                            <div class="col-md-2">
                                <div class="cont_img">
                                    
                                            <div class="view overlay">
                                            <?php the_post_thumbnail('full', ['class' => 'img_il_l', 'title' => 'images']); ?>
                                            <div class="mask flex-center rgba-white-strong">
                                                <img src="<?php bloginfo('template_url'); ?>/img/svg/proximamente.svg">
                                            </div>
                                        </div>
                                    
                                </div>
                                <br>
                                <div class="ellipse two-lines info boldsp">
                                    <?php the_title(); ?>
                                </div>

                            </div>
                            <div class="separar"></div>
                            <?php endwhile; } wp_reset_query(); ?>
                        </div>
                    </section>
                    
                </div>
            </div>
            
        </div> -->


        

        <!--<section class="mt-5 wow fadeIn">

        <div class="container">
            <br/><hr class="liPrin"><br/>
                <h2 class="tituh2">Próximamente</h2>
                <br/>
            <div class="row">
                    <?php
                    $the_query = new WP_Query( array(
                        'post_type' => 'libros',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'Genero',
                                'field' => 'slug',
                                'terms' => array( 'proximamente' ),
                                'order' => 'ASC'
                            ),
                        )
                    ));
                    ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-md-2 cover-books">
                            <div class="view overlay">
                                <?php the_post_thumbnail('full', ['class' => 'img_il_l', 'title' => 'images']); ?>
                                <div class="mask flex-center rgba-white-strong">
                                    <img src="<?php bloginfo('template_url'); ?>/img/svg/proximamente.svg">
                                </div>
                            </div>
                            <p class="text-center bolder"><?php the_title(); ?></p>
                        </div>
                    <?php endwhile; ?>
                    
                </div>
        </div>
    </section>-->

        <div class="container">
            <!--Section: Repositorio-->
            <section class="mt-5 wow fadeIn">
                <br/><hr class="liPrin"><br/>
                <h2 class="tituh2">Repositorio catálogo</h2>
                <br/>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="row fleRep">
                            <a class="btnLib" href="<?php bloginfo('url'); ?>/Genero/coleccion-divulgacion-cientifica/"><img class="imgLiR" src="<?php bloginfo('template_url'); ?>/img/generales/coleccion_divulgacion.png"/></a>
                            <a class="btnLib" href="<?php bloginfo('url'); ?>/Genero/coleccion-ciencia-e-investigacion"><img class="imgLiR" src="<?php bloginfo('template_url'); ?>/img/generales/coleccion_ciencia.png"/></a>
                            <a class="btnLib" href="<?php bloginfo('url'); ?>/Genero/coleccion-conocimiento"><img class="imgLiR" src="<?php bloginfo('template_url'); ?>/img/generales/coleccion_conocimiento.png"/></a>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <br/><hr class="liPrin"><br/>

                <div class="row justify-content-md-center">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="tituh3 text-center">Autores</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="contRepCat">
                                    <a href="<?php bloginfo('url'); ?>/autores/"><img class="iluRepCat" src="<?php bloginfo('template_url'); ?>/img/cc-website-home-iconos-autores.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="tituh3 text-center">Prepublicación</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="contRepCat">
                                    <a href="<?php bloginfo('url'); ?>/como-publicar/"><img class="iluRepCat" src="<?php bloginfo('template_url'); ?>/img/cc-website-home-iconos-prepublicacion.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="tituh3 text-center">Cotización</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="contRepCat">
                                    <a href="<?php bloginfo('url'); ?>/contacto"><img class="iluRepCat" src="<?php bloginfo('template_url'); ?>/img/cc-website-home-iconos-cotizacion.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--<div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="tituh3 text-center">Chat en vivo</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="contRepCat">
                                    <img class="iluRepCat" src="<?php bloginfo('template_url'); ?>/img/cc-website-home-iconos-chat.png">
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </section>
            <!--Section: Repositorio-->
        </div>

        <div class="container">
            <!--Section: Menciones en medios
            <section class="mt-5 wow fadeIn">
                <br/><hr class="liPrin"><br/>
                <h2 class="tituh2">Menciones en medios</h2>
                <br/>
                <div class="row">
                    <div class="col-md-8">
                        <img class="imgBlog" src="<?php bloginfo('template_url'); ?>/img/home/mencionesIluBlog.png">
                        <p class="tituNot">Título de noticia</p>
                        <p class="pNot">Breve descripción de la nota o noticia más relevante o más reciente, dependiendo de las necesidades de lo que se requiera. aksdas asdh asjha sdajdbausduabsd ajsdkjasnda kjabsdaskd bajsbdkjas d akjsbda djasbda sdajd fsdflhare idflsndf ihsifodf klhsdifnsdmf dbfsdfnsdf ibsdbfsndfksf idshfisdnfkslndf iosdbfisndkfnsdnsd oi.</p>
                        <p class="text-right">
                            <a class="linkLmas" href="#">Leer más</a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>Aquí va la API de Twitter</p>
                    </div>
                </div>
                
            </section>
            Section: Menciones en medios-->

            <section class="mt-5 wow fadeIn">
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <br/><hr class="liPrin"><br/>
                <h2 class="tituh2">Redes Sociales</h2>
                <br/>
                    </div>
                </div>
                <div class="row api-social">
                    <div class="col-md-6">
                        <h2 class="tituh3"><i class="fab fa-facebook-f fa-2x"></i> comunicacioncientificapublicaciones</h2>
                        <div class="separar"></div>
                        <div class="fb-page" data-href="https://www.facebook.com/comunicacioncientificapublicaciones/" data-tabs="timeline" data-width="500" data-height="480" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/comunicacioncientificapublicaciones/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/comunicacioncientificapublicaciones/">Comunicación Científica</a></blockquote></div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="tituh3"><i class="fab fa-twitter fa-2x"></i>@ComunidadCient2</h2>
                        <div class="separar"></div>
                        <blockquote class="twitter-tweet"><p lang="es" dir="ltr">&quot;De la medición de la pobreza a la estrategia de intervención comunitaria en el sur de Tamaulipas&quot;, Adolfo Rogelio Cogco Calderón, Guadalupe Isabel Ceballos Álvarez, Jorge Alberto Pérez Cruz, Rafael Isaac Estrada Danell.<a href="https://t.co/kEYRGqVrhl">https://t.co/kEYRGqVrhl</a></p>&mdash; Comunicación Científica (@ComunidadCient2) <a href="https://twitter.com/ComunidadCient2/status/1678423631557165056?ref_src=twsrc%5Etfw">July 10, 2023</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
                
            </section>
        </div>

        <div class="separar"></div>
        <div class="separar"></div>


        <div class="container">
            <!--Section: Afiliación-->
            <section class="mt-5 wow fadeIn">
                <br/><hr class="liPrin"><br/>
                <h2 class="tituh2">Afiliación</h2>
                <br/>
                <div class="row text-center">
                    <div class="col-md-3">
                        <p>ISBN Identificador: 978-607-99003</p>
                        
                    </div>
                    <div class="col-md-3">
                        <p><a target="_blank" href="http://www.caniem.com/es/directorio-de-afiliados?page=2">CANIEM: 3976</a></p>
                    </div>
                    <!--<div class="col-md-4">
                        <input class="inpAfil" type="text" id="afilreniecyt" placeholder="CROSSREF: En trámite">
                    </div>-->
                    <div class="col-md-3">
                        <p>DOI: 10.52501</p>
                    </div>
                    <div class="col-md-3">
                        <p>RENIECYT (CONACYT): 2000922</p>
                    </div>
                </div>
                
            </section>
            <!--Section: Afiliación-->
        </div>

        <div class="container">
            <!--Section: Boletín informativo-->
            <section class="mt-5 wow fadeIn">
                <br/><hr class="liPrin"><br/>
                <h2 class="tituh2">Boletín informativo</h2>
                <p class="pboletin">Regístrese para recibir contenidos y notificaciones sobre nuevos libros.</p>
                <div class="row">
                    
                </div>
                
            </section>
            <!--Section: Boletín informativo-->
        </div>

        <div class="container-fluid sin_padd">
            <div class="container">
                <div class="separar"></div>
                
                <!--Section: Form boletín informativo-->
                <?php echo apply_shortcodes( '[contact-form-7 id="65" title="Formulario de contacto 1"]' ); ?>
                <!--Section: Form boletín informativo-->
            </div>
        </div>


    </main>
    <!--Main layout-->


    <!-- Modal -->
    <div class="modal fade" id="modalEvento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cómo prevenir el plagio en escritos académicos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="<?php bloginfo('template_url'); ?>/img/webinar_turnitin_homewebsite_1200x1200.jpg" alt="Webinar Comunicación Científica" class="img-fluid">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <a type="button" href="https://comunicacion-cientifica.com/registro_evento/" class="btn btn-primary">Inscribirse</a>
          </div>
        </div>
      </div>
    </div>


<?php get_footer(); ?>