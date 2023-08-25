<?php get_header('int'); ?>
<!--Main layout-->
<main>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="container">
        <!-- SECCIÓN - PORTADA / INFO. / COSTO  LIBRO-->
        <section class="mt-5 wow fadeIn">
            <div class="row">
                <div class="col-md-12"><br /><br /><br /><br /></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <!-- IMG PORTADA -->
                    <?php if((get_post_meta( get_the_ID(), 'acceso_restringido', true ) )){ ?>
                    <div class="cont_img">
                        <a id="<?php echo $post->ID; ?>" class="paraContDes2" target="_blank" href="<?php echo get_post_meta($post->ID, 'download_pdf', true); ?>">
                            <div class="view overlay">
                                <?php the_post_thumbnail('full', ['class' => 'img_il_l', 'title' => 'images']); ?>
                                <div class="mask flex-center rgba-red-strong-restringido text-center">
                                    <h3><strong>ACCESO<br>Restringido</strong></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php }else{ ?>
                    <div class="cont_img">
                        <a id="<?php echo $post->ID; ?>" class="paraContDes3" target="_blank" href="<?php echo get_post_meta($post->ID, 'download_pdf', true); ?>">
                            <div class="view overlay">
                                <?php the_post_thumbnail('full', ['class' => 'img_il_l', 'title' => 'images']); ?>
                                <div class="mask flex-center rgba-red-strong">
                                    <img src="<?php bloginfo('template_url'); ?>/img/svg/open-access-seeklogo-white.svg">
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                    <div class="separar"></div>
                    <div class="palabra-clave">
                        <p>Palabras Clave</p>
                    </div>
                    <div class="keywords">
                        <p class="text_keywords">
                            <?php echo get_the_term_list( $post->ID, 'Keywords' ); ?>
                        </p>
                    </div>
                    <hr>
                    <?php if((get_post_meta( get_the_ID(), 'acceso_restringido', true ) )){ ?>
                    <div class="acceso-restringido">
                        <h3><strong>Acceso Restringido</strong></h3>
                    </div>
                    <hr>
                    <?php } ?>
                    <div class="avialable">
                        <?php if((get_post_meta( get_the_ID(), 'acceso_restringido', true ) )){ ?>
                        <p class="text-center"><span class="naranja boldsp">Acceso Restringido en:</span></p>
                        <?php }else{ ?>
                        <p class="text-center"><span class="naranja boldsp">Acceso Abierto en:</span></p>
                        <?php } ?>
                        <hr>
                        <?php if((get_post_meta( get_the_ID(), 'amazon_url', true ) )){ ?>
                        <a target="_blank" href="<?php echo get_post_meta($post->ID, 'amazon_url', true); ?>"><img src="https://comunicacion-cientifica.com/wp-content/uploads/2022/02/cc_amazon.jpg"></a>
                        <?php } else { ?>
                        <img src="https://comunicacion-cientifica.com/wp-content/uploads/2023/03/cc_amazon_transparent.jpg">
                        <?php } ?>
                        <hr>
                        <?php if((get_post_meta( get_the_ID(), 'playbooks_url', true ) )){ ?>
                        <a target="_blank" href="<?php echo get_post_meta($post->ID, 'playbooks_url', true); ?>"><img src="https://comunicacion-cientifica.com/wp-content/uploads/2022/02/cc_playbooks.jpg"></a>
                        <?php } else { ?>
                        <img src="https://comunicacion-cientifica.com/wp-content/uploads/2023/03/cc_playbooks_transparent.jpg">
                        <?php } ?>
                        <hr>
                        <?php if((get_post_meta( get_the_ID(), 'gandhi_url', true ) )){ ?>
                        <a target="_blank" href="<?php echo get_post_meta($post->ID, 'gandhi_url', true); ?>"><img src="https://comunicacion-cientifica.com/wp-content/uploads/2022/02/cc_gandhi.jpg"></a>
                        <?php } else { ?>
                        <img src="https://comunicacion-cientifica.com/wp-content/uploads/2023/03/cc_gandhi_transparent.jpg">
                        <?php } ?>
                        <hr>
                        <?php if((get_post_meta( get_the_ID(), 'ibooks_url', true ) )){ ?>
                        <a target="_blank" href="<?php echo get_post_meta($post->ID, 'ibooks_url', true); ?>"><img src="https://comunicacion-cientifica.com/wp-content/uploads/2022/10/cc_ibooks2.jpg"></a>
                        <?php } else { ?>
                        <img src="https://comunicacion-cientifica.com/wp-content/uploads/2023/03/cc_ibooks2_transparent.jpg">
                        <?php } ?>
                        <hr>
                        <?php if((get_post_meta( get_the_ID(), 'scribd_url', true ) )){ ?>
                        <a target="_blank" href="<?php echo get_post_meta($post->ID, 'scribd_url', true); ?>"><img src="https://comunicacion-cientifica.com/wp-content/uploads/2023/05/cc-scribd.jpg"></a>
                        <?php } else { ?>
                        <img src="https://comunicacion-cientifica.com/wp-content/uploads/2023/05/cc-scribd_transparent.jpg">
                        <?php } ?>
                        <hr>
                        <?php if((get_post_meta( get_the_ID(), 'kobo_url', true ) )){ ?>
                        <a target="_blank" href="<?php echo get_post_meta($post->ID, 'kobo_url', true); ?>"><img src="https://comunicacion-cientifica.com/wp-content/uploads/2023/05/cc-kobo.jpg"></a>
                        <?php } else { ?>
                        <img src="https://comunicacion-cientifica.com/wp-content/uploads/2023/05/cc-kobo_transparent.jpg">
                        <?php } ?>
                        <hr>
                        <?php if((get_post_meta( get_the_ID(), 'bookbeat_url', true ) )){ ?>
                        <a target="_blank" href="<?php echo get_post_meta($post->ID, 'bookbeat_url', true); ?>"><img src="https://comunicacion-cientifica.com/wp-content/uploads/2023/05/cc-bookbeat.jpg"></a>
                        <?php } else { ?>
                        <img src="https://comunicacion-cientifica.com/wp-content/uploads/2023/05/cc-bookbeat_transparent.jpg">
                        <?php } ?>
                    </div>
                </div>
                <!--/. IMG PORTADA -->
                <div class="col-md-7" style="margin-top: 1.8em;">
                    <!-- INFO. LIBRO -->
                    <p class="text_tit_obra"><a target="_blank" href="<?php echo get_post_meta($post->ID, 'download_pdf', true); ?>">
                            <?php the_title(); ?></a></p>
                    <?php if (get_post_meta( get_the_ID(), 'subtitle', true ) ) { ?>
                    <p class="subtitle">
                        <?php echo get_post_meta($post->ID, 'subtitle', true); ?>
                    </p>
                    <?php } ?>
                    <!--- AUTORES -->
                    <?php include('includes/single-author.php'); ?>
                    <!-- AUTORES -->
                    <!--<p class="text_autores"><?php echo get_the_term_list( $post->ID, 'Autores', '', ', ', '' ); ?></p>-->
                    <div class="text_desc">
                        <?php the_excerpt(); ?>
                    </div>
                    <hr>
                    <!-- ICONS DESCARGAS -->
                    <div class="row">
                        <?php if (get_post_meta( get_the_ID(), 'version_html', true ) ) { ?>
                        <div class="col-md-2 icons-books">
                            <a id="<?php echo $post->ID; ?>_c" href="<?php echo get_post_meta($post->ID, 'version_html', true); ?>" target="_blank" class="text_lib_comp"><img src="https://comunicacion-cientifica.com/wp-content/uploads/2022/12/html5-icon.jpg" alt="Logo HTML5"></a>
                        </div>
                        <?php } ?>
                        <?php if (get_post_meta( get_the_ID(), 'download_book', true ) ) { ?>
                        <div class="col-md-2 icons-books">
                            <a id="<?php echo $post->ID; ?>_d" href="<?php echo get_post_meta($post->ID, 'download_book', true); ?>" target="_blank" class="text_lib_comp"><img src="https://comunicacion-cientifica.com/wp-content/uploads/2022/12/epub-icon.jpg" alt="Logo ePub"></a>
                        </div>
                        <?php } ?>
                        <?php if (get_post_meta( get_the_ID(), 'download_pdf', true ) ) { ?>
                        <div class="col-md-2 icons-books">
                            <a id="<?php echo $post->ID; ?>" href="<?php echo get_post_meta($post->ID, 'download_pdf', true); ?>" target="_blank" class="text_lib_comp paraContDes"><img src="https://comunicacion-cientifica.com/wp-content/uploads/2022/12/pdf-icon.jpg" alt="Logo PDF"></a>
                        </div>
                        <?php } ?>
                    </div>
                    <hr />
                    <div class="separa"></div>
                    <table>
                        <tr>
                            <td>
                            <td class="text_datos_lib"><span class="naranja boldsp">CITAR DIRECTO</span> <img src="<?php bloginfo('template_url'); ?>/img/doi.png" alt="" style="width: 30px;"> <span class="boldsp azul_link"><a href="https://doi.org/<?php echo get_post_meta($post->ID, 'doi', true); ?>" target="_blank">https://doi.org/
                                        <?php echo get_post_meta($post->ID, 'doi', true); ?></a></span></td>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                    </table>
                    <div class="separar"></div>
                    <?php if (get_post_meta( get_the_ID(), 'citar-directo', true ) ) { ?>
                    <a type="button" class="btn btn-outline-primary waves-effect" data-toggle="modal" data-target="#modalcitar">Citar directo</a>
                    <?php } ?>
                    <!-- DUBLIN CORE -->
                    
                    <hr>
                    <div class="dublin-core">
                        <p class="mt-1 mb-1 text_tit_obra">Interoperabilidad Metadatos Académicos</p>
                        <a data-toggle="modal" data-target="#modal-ficha-catalografica"><img src="<?php bloginfo('template_url'); ?>/img/dublin-core.jpg" alt="Dublin Core"></a>
                    </div>
                    <hr>
                    
                    <!-- DUBLIN CORE -->
                    <div class="separar"></div>
                    <table>
                        <!-- DATOS "ÚNICOS" del LIBRO -->
                        <tr>
                            <td class="text_datos_lib">Año:
                                <?php echo get_post_meta($post->ID, 'fecha_publicacion_impreso', true); ?>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text_datos_lib">Edición:
                                <?php echo get_post_meta($post->ID, 'edicion', true); ?>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text_datos_lib">
                                <?php if((get_post_meta( get_the_ID(), 'coleccion_term', true ) )){ ?>
                                Colección:
                                <?php echo get_post_meta($post->ID, 'coleccion_term', true); ?>
                                <?php }else{ ?>
                                Colección: Conocimiento
                                <?php } ?>
                                <!--<?php echo get_the_term_list( $post->ID, 'Genero', '', ', ', '' ); ?>-->
                            </td>
                            <td></td>
                        </tr>
                        <?php if (get_post_meta( get_the_ID(), 'coeditor', true ) ) { ?>
                        <tr>
                            <td class="text_datos_lib">Coeditor:
                                <?php echo get_post_meta($post->ID, 'coeditor', true); ?>
                            </td>
                            <td></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td class="text_datos_lib">ISBN:
                                <?php echo get_post_meta($post->ID, 'isbn', true); ?>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text_datos_lib">Páginas:
                                <?php echo get_post_meta($post->ID, 'paginas_impreso', true); ?>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text_datos_lib">Tamaño:
                                <?php echo get_post_meta($post->ID, 'medidas_impreso', true); ?>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <!--<td class="text_datos_lib">
                                    <div class="fb-like" data-href="https://www.facebook.com/comunicacioncientificapublicaciones/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
                                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </td>-->
                            <td>
                            </td>
                        </tr>
                    </table>
                    <!--/. DATOS "ÚNICOS" del LIBRO -->
                </div>
                <!--/. INFO. LIBRO -->
                <div class="col-md-2" style="padding: 0;">
                    <div class="row">
                        <!-- GRÁFICA -->
                        <div class="col-md-12">
                            <p class="text_tits_prfLib">IMPACTO DE LA PUBLICACIÓN</p>
                            <hr />
                            <div class="separar"></div>
                            <!-- GRAFICA ROSQUILLA
                                    <canvas id="myChart" width="400" height="400"></canvas>
                                GRAFICA ROSQUILLA -->
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="__dimensions_badge_embed__" data-style="large_circle" data-doi="<?php echo get_post_meta($post->ID, 'doi', true); ?>"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/. GRÁFICA -->
                    <div class="row">
                        <div class="col-md-12 mt-4 contVisDes">
                            <p class="contVisDesTxt text-center">Visitantes</p>
                            <p class="text-center contVisDesNum"><strong>
                                    <?php echo do_shortcode( '[shortcont]' ); ?></strong></p>
                        </div>
                        <div class="col-md-12 mt-3 contVisDes">
                            <p class="contVisDesTxt text-center">Descargas</p>
                            <p class="text-center contVisDesNum"><strong>
                                    <?php echo do_shortcode( '[shortcontDesc]' ); ?></strong></p>
                        </div>
                    </div>
                    <hr>
                    <!-- DICTAMINACIÓN PDFs -->
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text_tits_prfLib">DICTAMINACIÓN</p>
                            <p class="text_desc_pdf">Descargas en PDF</p>
                            <?php if (get_post_meta( get_the_ID(), 'dictamen_1', true ) ) { ?>
                            <p style="margin-top: -0.7em;"><a target="_black" href="<?php echo get_post_meta($post->ID, 'dictamen_1', true); ?>" class="text_dictamen"><i class="far fa-file-pdf"></i> Dictamen 1 </a> </p>
                            <?php } ?>
                            <?php if (get_post_meta( get_the_ID(), 'dictamen_2', true ) ) { ?>
                            <p style="margin-top: -0.7em;"><a target="_black" href="<?php echo get_post_meta($post->ID, 'dictamen_2', true); ?>" class="text_dictamen"><i class="far fa-file-pdf"></i> Dictamen 2 </a> </p>
                            <?php } ?>
                        </div>
                    </div>
                    <!--/. DICTAMINACIÓN PDFs -->
                    <hr>
                    <div class="logo-turniting">
                        <p class="turniting" style="color: #005763">VERIFICACIÓN DE SIMILITUD</p>
                        <img class="mt-1" src="<?php bloginfo('template_url'); ?>/img/turnitin.png" alt="Turniting">
                        <p class="turniting" style="color: #005763"><a href="">Descargar en PDF</a></p>
                    </div>
                    <hr>
                    <!-- MEDIOS -->
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text_tits_prfLib">INDEXACIÓN INTERNACIONAL</p>
                        </div>
                    </div>
                    <!-- MEDIOS -->
                </div>
                <!--<div class="col-md-2" style="padding: 0;">
                                <div class="row">
                                        <div class="col-md-12"><br/><br/><br/><br/><br/></div>
                                </div>
                                    <div class="row">
                                            <table style="margin-left: 1em;">
                                                    <tr>
                                                            <td class="text_datos_fin" colspan="2">Libro impreso:</td>
                                        <td class="text_datos_fin_n"><?php echo get_post_meta($post->ID, 'precio_impreso', true); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text_datos_fin">ISBN:</td>
                                        <td class="text_datos_fin" colspan="2"><?php echo get_post_meta($post->ID, 'isbn_impreso', true); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text_datos_fin"><?php echo get_post_meta($post->ID, 'paginas_impreso', true); ?>pp.</td>
                                        <td class="text_datos_fin"><?php echo get_post_meta($post->ID, 'medidas_impreso', true); ?></td>
                                        <td class="text_datos_fin text-right"><?php echo get_post_meta($post->ID, 'fecha_publicacion_impreso', true); ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>-->
            </div>
            <!--/. INFO. COMERCIAL del LIBRO -->
    </div>
    </section>
    <!--/.SECCIÓN - PORTADA / INFO. / COSTO -->
    <!--SECCIÓN - GRÁFICA / PDFs / INFO. LIBRO -->
    <section class="mt-5 wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- GRÁFICA y PDFs -->
                    <!-- ATENCIÓN OBSERVACIONES DE LA DICTAMINACIÓN
                            <div class="row">
                                    <div class="col-md-12">
                                            <br/>
                                            <p class="text_tits_prfLib">ATENCIÓN OBSERVACIONES DE LA DICTAMINACIÓN</p>
                                            <p class="text_desc_pdf">Descargas en PDF</p>
                                            <p style="margin-top: -0.7em;"><a href="#" class="text_dictamen"><i class="far fa-file-pdf"></i> Dictamen 1 </a> </p>
                                            <p style="margin-top: -0.7em;"><a href="#" class="text_dictamen"><i class="far fa-file-pdf"></i> Dictamen 2</a></p>
                                    </div>
                            </div>
                            ATENCIÓN OBSERVACIONES DE LA DICTAMINACIÓN -->
                </div>
                <!--/. GRÁFICA y PDFs -->
                <div class="col-md-9">
                    <!-- TAB "PESTAÑAS" - INFO. LIBRO -->
                    <div class="row d-flex justify-content-center">
                        <!-- TAB "PESTAÑAS" - QUIQUE -->
                        <div class="col-md-12">
                            <ul class="nav nav-tabs " id="myTab" role="tablist" style="width: 100%">
                                <li class="nav-item" style="width: 15%; text-align: center;">
                                    <!-- "Secc. - RESUMEN" -->
                                    <a class="nav-link text_tits_prfLib active" id="resumen" data-toggle="tab" href="#cont_resumen" role="tab" aria-controls="home" aria-selected="true">Resumen</a>
                                </li>
                                <!--/. "Secc. - RESUMEN" -->
                                <li class="nav-item" style="width: 15%; text-align: center;">
                                    <!-- "Secc. - AUTORES" -->
                                    <a class="nav-link text_tits_prfLib" id="autores" data-toggle="tab" href="#cont_autores" role="tab" aria-controls="profile" aria-selected="false">Autores</a>
                                </li>
                                <!--/. "Secc. - AUTORES" -->
                                <li class="nav-item" style="width: 35%; text-align: center;">
                                    <!-- "Secc. - IMPACTO DE LA INVESTIGACIÓN" -->
                                    <a class="nav-link text_tits_prfLib" id="imp_invs" data-toggle="tab" href="#cont_imp_invs" role="tab" aria-controls="contact" aria-selected="false">Mediciones en medios</a>
                                </li>
                                <!--/. "Secc. - IMPACTO DE LA INVESTIGACIÓN" -->
                                <li class="nav-item" style="width: 20%; text-align: center;">
                                    <!-- "Secc. - IMPACTO DE LA INVESTIGACIÓN" -->
                                    <a class="nav-link text_tits_prfLib" id="redes" data-toggle="tab" href="#cont_redes" role="tab" aria-controls="redes" aria-selected="false">Redes Sociales</a>
                                </li>
                                <!--/. "Secc. - IMPACTO DE LA REDES" -->
                                <li class="nav-item" style="width: 15%; text-align: center;">
                                    <!-- "Secc. - IMPACTO DE LA INVESTIGACIÓN" -->
                                    <a class="nav-link text_tits_prfLib" id="videos" data-toggle="tab" href="#cont_videos" role="tab" aria-controls="videos" aria-selected="false">Videos</a>
                                </li>
                                <!--/. "Secc. - IMPACTO DE LA INVESTIGACIÓN" -->
                            </ul>
                            <div class="tab-content paddTab" id="myTabContent">
                                <!-- CONTENIDO CARRUSEL  -->
                                <div class="tab-pane fade show active" id="cont_resumen" role="tabpanel" aria-labelledby="home-tab">
                                    <!-- Contenido RESUMEN -->
                                    <div class="pgen">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                <!--/. Contenido RESUMEN -->
                                <div class="tab-pane fade" id="cont_autores" role="tabpanel" aria-labelledby="profile-tab">
                                    <!-- Contenido AUTORES -->
                                    <?php foreach (get_the_terms(get_the_ID(), 'Autores') as $cat) : ?>
                                    <p class="pgen">
                                        <?php echo $cat->name; ?>
                                    </p>
                                    <?php echo $cat->description; ?>
                                    <p><br /></p>
                                    <p><img style="height: 30px; float: left; margin-right: 10px" src="<?php bloginfo('template_url'); ?>/img/orcid-og-image.png" alt="ORCID logo"><a href="<?php echo get_term_meta( $cat->term_id, 'autores_orcid', true ); ?>">
                                            <?php echo get_term_meta( $cat->term_id, 'autores_orcid', true ); ?></a></p>
                                    <hr>
                                    <?php endforeach; ?>
                                </div>
                                <!--/. Contenido AUTORES -->
                                <div class="tab-pane fade" id="cont_imp_invs" role="tabpanel" aria-labelledby="contact-tab">
                                    <!--/. Contenido MÉTRICA -->
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mapcontainer">
                                                    <br /><br />
                                                    <div class="map">
                                                        <span>Alternative content for the map</span>
                                                    </div>
                                                    <div class="areaLegend marTopMap">
                                                        <span>Alternative content for the legend</span>
                                                    </div>
                                                    <div class="plotLegend">
                                                        <span>Alternative content for the legend</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/. Contenido MÉTRICA -->
                                <div class="tab-pane fade" id="cont_redes" role="tabpanel" aria-labelledby="redes-tab">
                                    <!-- Contenido REDES -->
                                    <p>REDES SOCIALES</p>
                                </div>
                                <!--/. Contenido REDES -->
                                <div class="tab-pane fade" id="cont_videos" role="tabpanel" aria-labelledby="videos-tab">
                                    <!-- Contenido REDES -->
                                    <p>VIDEOS</p>
                                </div>
                                <!--/. Contenido REDES -->
                            </div>
                            <!--/. Contenido MEDIOS -->
                        </div>
                        <!--/. TAB "PESTAÑAS" - INFO. LIBRO -->
                        <?php endwhile; ?>
                        <div class="col-md-12" style="padding-top: 3em;">
                            <p class="pgen">¿Desea publicar?, contacte con nuestros editores <a class="" href="<?php bloginfo('url'); ?>/contacto">aquí</a>.</p>
                        </div>
                    </div>
    </section>
    <!--/.SECCIÓN - GRÁFICA / PDFs / INFO. LIBRO -->
    <!--SECCIÓN - ¿DESEA PUBLICAR? -->
    <section class="mt-5 wow fadeIn">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </section>
    <!--/.SECCIÓN - ¿DESEA PUBLICAR? -->
    </div>
</main>
<!--Main layout-->
<!-- Modal CITA -->
<div class="modal fade" id="modalcitar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Citar directo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Default form subscription -->
                <div class="contact-form">
                    <p id="myInput" class="copy-text">
                        <?php echo get_post_meta($post->ID, 'citar-directo', true); ?>
                    </p>
                    <span class="message"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary waves-effect copy-btn" data-bs-dismiss="modal">Copiar</button>
            </div>
        </div>
    </div>
</div>
<!-- MODAL FICHA CATALOGRAFICA -->
<div class="modal fade" id="modal-ficha-catalografica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Ficha Catalográfica</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Default form subscription -->
                <div class="contact-form">
                    <table class="table" id="ficha-catalografica">
                        <tr>
                            <td><strong>Título</strong></td>
                            <td>
                                <?php the_title(); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Autores</strong></td>
                            <td>
                                <p class="autores-ficha-catalografica">
                                    <?php echo get_the_term_list( $post->ID, 'Autores', '', ', ', '' ); ?>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Idioma</strong></td>
                            <td>Español</td>
                        </tr>
                        <tr>
                            <td><strong>ISBN</strong></td>
                            <td>
                                <?php echo get_post_meta($post->ID, 'isbn', true); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>DOI</strong></td>
                            <td>
                                <?php echo get_post_meta($post->ID, 'doi', true); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Páginas</strong></td>
                            <td>
                                <?php echo get_post_meta($post->ID, 'paginas_impreso', true); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Dimensiones</strong></td>
                            <td>
                                <?php echo get_post_meta($post->ID, 'medidas_impreso', true); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Lugar de publicación</strong></td>
                            <td>México</td>
                        </tr>
                        <tr>
                            <td><strong>Editorial</strong></td>
                            <td>Comunicación Científica</td>
                        </tr>
                        <tr>
                            <td><strong>Edición</strong></td>
                            <td>
                                <?php echo get_post_meta($post->ID, 'edicion', true); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Año publicación</strong></td>
                            <td>
                                <?php echo get_post_meta($post->ID, 'fecha_publicacion_impreso', true); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Serie</strong></td>
                            <?php if((get_post_meta( get_the_ID(), 'coleccion_term', true ) ) === "Colección Ciencia e investigación"){ ?>
                            <td>Colección Ciencia e investigación</td>
                            <?php } else if((get_post_meta( get_the_ID(), 'coleccion_term', true ) ) === "Colección Conocimiento") { ?>
                            <td>Colección Conocimiento</td>
                            <?php } else if((get_post_meta( get_the_ID(), 'coleccion_term', true ) ) === "Colección Divulgación Científica"){ ?>
                            <td>Colección Divulgación Científica</td>
                            <?php } else { ?>
                            <td>Colección Ciencia e investigación	</td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td><strong>Materia</strong></td>
                            <td>
                                <?php echo get_the_term_list( $post->ID, 'Genero', '', ', ', ' '); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Palabras Clave</strong></td>
                            <td>
                                <p class="ficha-catalografica-keywords">
                                    <?php echo get_the_term_list( $post->ID, 'Keywords', '', ', ', ''); ?>
                                </p>
                            </td>
                        </tr>
                        <!-- EPUB -->
                        <?php if((get_post_meta( get_the_ID(), 'pdf_format', true ) )){ ?>
                        <tr>
                            <td><strong>Formato 1</strong></td>
                            <td>NO</td>
                        </tr>
                        <?php }else{ ?>
                        <tr>
                            <td><strong>Formato 1</strong></td>
                            <td>PDF</td>
                        </tr>
                        <?php } ?>
                        <!-- PDF -->
                        <?php if((get_post_meta( get_the_ID(), 'epub_format', true ) )){ ?>
                        <tr>
                            <td><strong>Formato 2</strong></td>
                            <td>NO</td>
                        </tr>
                        <?php }else{ ?>
                        <tr>
                            <td><strong>Formato 2</strong></td>
                            <td>EPUB</td>
                        </tr>
                        <?php } ?>
                        <!-- HTM5 -->
                        <?php if((get_post_meta( get_the_ID(), 'html5_format', true ) )){ ?>
                        <tr>
                            <td><strong>Formato 3</strong></td>
                            <td>NO</td>
                        </tr>
                        <?php }else{ ?>
                        <tr>
                            <td><strong>Formato 3</strong></td>
                            <td>HTML5</td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="pdfFile" class="btn btn-primary">Guardar PDF</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>

    
</script>
<!-- Modal -->
<?php get_footer(); ?>