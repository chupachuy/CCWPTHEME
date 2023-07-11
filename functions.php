<?php




/**
 * Include CSS files
 */
/*function theme_enqueue_scripts() {
        wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
        wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'MDB', get_template_directory_uri() . '/css/mdb.min.css' );
        wp_enqueue_style( 'Style', get_template_directory_uri() . '/style.css' );


        wp_enqueue_style( 'stylesCCcatalogo', get_template_directory_uri() . '/css/stylesCCcatalogo.css' );
        wp_enqueue_style( 'stylesCCcolecciones', get_template_directory_uri() . '/css/stylesCCcolecciones.css' );
        wp_enqueue_style( 'stylesCCcomoPublicar', get_template_directory_uri() . '/css/stylesCCcomoPublicar.css' );
        wp_enqueue_style( 'stylesCCcomunicacion', get_template_directory_uri() . '/css/stylesCCcomunicacion.css' );
        wp_enqueue_style( 'stylesCCcontacto', get_template_directory_uri() . '/css/stylesCCcontacto.css' );
        wp_enqueue_style( 'stylesCCgeneral', get_template_directory_uri() . '/css/stylesCCgeneral.css' );
        wp_enqueue_style( 'stylesCChome', get_template_directory_uri() . '/css/stylesCChome.css' );
        wp_enqueue_style( 'stylesCCimpactoInvest', get_template_directory_uri() . '/css/stylesCCimpactoInvest.css' );
        wp_enqueue_style( 'stylesCCperfilAutor', get_template_directory_uri() . '/css/stylesCCperfilAutor.css' );
        wp_enqueue_style( 'stylesCCperfilLibro', get_template_directory_uri() . '/css/stylesCCperfilLibro.css' );
        wp_enqueue_style( 'stylesCCqueEsperar', get_template_directory_uri() . '/css/stylesCCqueEsperar.css' );
        wp_enqueue_style( 'stylesCCservEdit', get_template_directory_uri() . '/css/stylesCCservEdit.css' );
        wp_enqueue_style( 'stylesCCtransparencia', get_template_directory_uri() . '/css/stylesCCtransparencia.css' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );

        

        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), '3.4.1', true );
        wp_enqueue_script( 'Tether', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'MDB-js', get_template_directory_uri() . '/js/mdb.min.js', array(), '1.0.0', true );

       

        wp_enqueue_script( 'OWL', get_template_directory_uri() . '/js/owlcarousel/owl.carousel.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'OWL-GREEN', get_template_directory_uri() . '/js/owlcarousel/owl.theme.green.js', array(), '1.0.0', true );


       
         wp_enqueue_script( 'accCatalogo', get_template_directory_uri() . '/js/accCatalogo.js', array(), '1.0.0', true );
         wp_enqueue_script( 'accColecciones', get_template_directory_uri() . '/js/accColecciones.js', array(), '1.0.0', true );
         wp_enqueue_script( 'accComoPublicar', get_template_directory_uri() . '/js/accComoPublicar.js', array(), '1.0.0', true );
         wp_enqueue_script( 'accHome', get_template_directory_uri() . '/js/accHome.js', array(), '1.0.0', true );
         wp_enqueue_script( 'accImpactoInvest', get_template_directory_uri() . '/js/accImpactoInvest.js', array(), '1.0.0', true );
         wp_enqueue_script( 'accPerfilAutor', get_template_directory_uri() . '/js/accPerfilAutor.js', array(), '1.0.0', true );
         wp_enqueue_script( 'accPerfilLibro', get_template_directory_uri() . '/js/accPerfilLibro.js', array(), '1.0.0', true );
         wp_enqueue_script( 'accQueEsperar', get_template_directory_uri() . '/js/accQueEsperar.js', array(), '1.0.0', true );
         wp_enqueue_script( 'accServEdit', get_template_directory_uri() . '/js/accServEdit.js', array(), '1.0.0', true );
         wp_enqueue_script( 'accTransparencia', get_template_directory_uri() . '/js/accTransparencia.js', array(), '1.0.0', true );

        }
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );*/


function custom_single_template($the_template) {
    foreach ( (array) get_the_category() as $cat ) {
        if ( locate_template("single-noticias.php") ) {
            return locate_template("single-noticias.php");
        }
    }
    return $the_template;
}
add_filter( 'single_template', 'custom_single_template');



/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'comunicacioncientifica' ),
) );


add_theme_support( 'post-thumbnails' );
the_post_thumbnail( 'full' );

// Add new post type for Libros
add_action('init', 'libros_init');
function libros_init() 
{
    $Libro_labels = array(
        'name' => _x('Libros', 'post type general name'),
        'singular_name' => _x('Libro', 'post type singular name'),
        'all_items' => __('Todos los Libros'),
        'add_new' => _x('Agregar nuevo Libro', 'Libros'),
        'add_new_item' => __('Agregar nuevo Libro'),
        'edit_item' => __('Editar Libro'),
        'new_item' => __('Nuevo Libro'),
        'view_item' => __('Ver Libro'),
        'search_items' => __('Buscar en Libros'),
        'not_found' =>  __('Libros no encontrados'),
        'not_found_in_trash' => __('Libros no encontrados en papelera'), 
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $Libro_labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
        'has_archive' => 'Libros'
    ); 
    register_post_type('Libros',$args);
}


// Add new post type for Autores



    /*  Genero de publicacion  */

    $Genero_labels = array(
        'name' => _x( 'Genero', 'taxonomy general name' ),
        'singular_name' => _x( 'Genero', 'taxonomy singular name' ),
        'search_items' =>  __( 'Buscar Genero' ),
        'popular_items' => __( 'Genero más populares' ),
        'all_items' => __( 'Todos los Generos' ),
        'most_used_items' => null,
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Editar Genero' ), 
        'update_item' => __( 'Actualizar Genero' ),
        'add_new_item' => __( 'Agregar nueva Genero' ),
        'new_item_name' => __( 'Nuevo nombre de Genero' ),
        'add_or_remove_items' => __( 'Agregar o quitar Genero' ),
        'choose_from_most_used' => __( 'Elegir de los Genero más usados' ),
        'menu_name' => __( 'Generos' ),
    );
    register_taxonomy('Genero',array('libros', 'Autores'),array(
        'hierarchical' => true,
        'labels' => $Genero_labels,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'Genero' )
    ));

    

    /* CREAR MIS TAXONOMIAS PROPIAS */
// Keywords
    $Keywords_labels = array(
        'name' => _x( 'Keywords', 'taxonomy general name' ),
        'singular_name' => _x( 'Keyword', 'taxonomy singular name' ),
        'search_items' =>  __( 'Buscar Keywords' ),
        'popular_items' => __( 'Keywords más populares' ),
        'all_items' => __( 'Todas las Keywords' ),
        'most_used_items' => null,
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Editar Keyword' ), 
        'update_item' => __( 'Actualizar Keyword' ),
        'add_new_item' => __( 'Agregar nueva Keyword' ),
        'new_item_name' => __( 'NUevo nombre de Keyword' ),
        'separate_items_with_commas' => __( 'Separar Keywords con comas' ),
        'add_or_remove_items' => __( 'Agregar o quitar Keywords' ),
        'choose_from_most_used' => __( 'Elegir de las Keywords más usadas' ),
        'menu_name' => __( 'Keywords' ),
    );
    register_taxonomy('Keywords',array('libros'),array(
        'hierarchical' => false,
        'labels' => $Keywords_labels,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'keyword' )
    ));

    /*  Idioma  */

    $Idiomas_labels = array(
        'name' => _x( 'Idioma', 'taxonomy general name' ),
        'singular_name' => _x( 'Idioma', 'taxonomy singular name' ),
        'search_items' =>  __( 'Buscar Idiomas' ),
        'popular_items' => __( 'Idiomas más populares' ),
        'all_items' => __( 'Todas los Idiomas' ),
        'most_used_items' => null,
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Editar Idioma' ), 
        'update_item' => __( 'Actualizar Idioma' ),
        'add_new_item' => __( 'Agregar nueva Idioma' ),
        'new_item_name' => __( 'NUevo nombre de Idioma' ),
        'separate_items_with_commas' => __( 'Separar Idiomas con comas' ),
        'add_or_remove_items' => __( 'Agregar o quitar Idiomas' ),
        'choose_from_most_used' => __( 'Elegir de los Idiomas más usadas' ),
        'menu_name' => __( 'Idiomas' ),
    );
    register_taxonomy('Idiomas',array('libros'),array(
        'hierarchical' => true,
        'labels' => $Idiomas_labels,
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'idioma' )
    ));


    /*  Colaboradores
      */

    $Colaboradores_labels = array(
        'name' => _x( 'Colaboradores', 'taxonomy general name' ),
        'singular_name' => _x( 'Colaboradores', 'taxonomy singular name' ),
        'search_items' =>  __( 'Buscar Colaboradores' ),
        'popular_items' => __( 'Colaboradores más populares' ),
        'all_items' => __( 'Todas los Colaboradores' ),
        'most_used_items' => null,
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Editar Colaborador' ), 
        'update_item' => __( 'Actualizar Colaborador' ),
        'add_new_item' => __( 'Agregar nuevo Colaboradore' ),
        'new_item_name' => __( 'Nuevo nombre de Colaborador' ),
        'separate_items_with_commas' => __( 'Separar Colaboradores con comas' ),
        'add_or_remove_items' => __( 'Agregar o quitar Colaboradores' ),
        'choose_from_most_used' => __( 'Elegir de los Colaboradores más usados' ),
        'menu_name' => __( 'Colaboradores' ),
    );
    register_taxonomy('Colaboradores',array('libros'),array(
        'hierarchical' => true,
        'labels' => $Colaboradores_labels,
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'colaboradores' )
    ));

    /*  Autor  */

    $Autores_labels = array(
        'name' => _x( 'Autor', 'taxonomy general name' ),
        'singular_name' => _x( 'Autor', 'taxonomy singular name' ),
        'search_items' =>  __( 'Buscar Autores' ),
        'popular_items' => __( 'Autores más populares' ),
        'all_items' => __( 'Todos los Autores' ),
        'most_used_items' => null,
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Editar Autor' ), 
        'update_item' => __( 'Actualizar Autor' ),
        'add_new_item' => __( 'Agregar nuevo Autor' ),
        'new_item_name' => __( 'NUevo nombre de Autor' ),
        'separate_items_with_commas' => __( 'Separar Autors con comas' ),
        'add_or_remove_items' => __( 'Agregar o quitar Autores' ),
        'choose_from_most_used' => __( 'Elegir de los Autores más usados' ),
        'menu_name' => __( 'Autores' ),
    );
    register_taxonomy('Autores',array('libros'),array(
        'hierarchical' => false,
        'labels' => $Autores_labels,
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'Autor' )
    ));


   // AGREGA EL CAMPO PARA ORCCID DE AUTORES

    add_action( 'Autores_add_form_fields', 'cc_autores_add_form_fields');

    function cc_autores_add_form_fields(){
        ?>

            <div class="form-fields">
                <label for="autores_orcid">ORCID</label>
                <input type="text" name="autores_orcid" id="autores_orcid">
                <p>Particular ORCID Autor</p>
            </div>

            <div class="form-fields">
                <label for="autores_twitter">TWITTER</label>
                <input type="text" name="autores_twitter" id="autores_twitter">
                <p>Particular Twitter Autor</p>
            </div>

            <div class="form-fields">
                <label for="autores_facebook">FACEBOOK</label>
                <input type="text" name="autores_facebook" id="autores_facebook">
                <p>Particular Facebook Autor</p>
            </div>

             <div class="form-fields">
                <label for="autores_researchgate">RESEARCH GATE</label>
                <input type="text" name="autores_researchgate" id="autores_researchgate">
                <p>Particular Research Gate Autor</p>
            </div>

            <div class="form-fields">
                <label for="autores_googlescholar">RESEARCH GATE</label>
                <input type="text" name="autores_googlescholar" id="autores_googlescholar">
                <p>Particular Research Gate Autor</p>
            </div>

        <?php
    }

    add_action( 'Autores_edit_form_fields', 'cc_autores_edit_form_fields', 10, 2);

    function cc_autores_edit_form_fields($term, $taxonomy){

        //var_dump($term->term_id);

        $value = get_term_meta($term->term_id, 'autores_orcid', true);
        $valuetwitter = get_term_meta($term->term_id, 'autores_twitter', true);
        $valuefacebook = get_term_meta($term->term_id, 'autores_facebook', true);
        $valueresearchgate = get_term_meta($term->term_id, 'autores_researchgate', true);
        $valuegooglescholar = get_term_meta($term->term_id, 'autores_googlescholar', true);
        ?>

            <tr class="form-field">
                <th scope="row"><label for="autores_orcid">ORCID</label></th>
                <td><input type="text" name="autores_orcid" id="autores_orcid" value="<?php echo esc_attr($value);  ?>" size="40">
                <p class="description" id="name-description">Particular ORCID Autor</p></td>
            </tr>

            <!-- TWITTER -->
            <tr class="form-field">
                <th scope="row"><label for="autores_twitter">Twitter</label></th>
                <td><input type="text" name="autores_twitter" id="autores_twitter" value="<?php echo esc_attr($valuetwitter);  ?>" size="40">
                <p class="description" id="name-description">Particular Twitter Autor</p></td>
            </tr>

            <!-- FACEBOOK -->
            <tr class="form-field">
                <th scope="row"><label for="autores_facebook">Facebook</label></th>
                <td><input type="text" name="autores_facebook" id="autores_facebook" value="<?php echo esc_attr($valuefacebook);  ?>" size="40">
                <p class="description" id="name-description">Particular Facebook Autor</p></td>
            </tr>

            <!-- Research Gate -->
            <tr class="form-field">
                <th scope="row"><label for="autores_researchgate">Research Gate</label></th>
                <td><input type="text" name="autores_researchgate" id="autores_researchgate" value="<?php echo esc_attr($valueresearchgate);  ?>" size="40">
                <p class="description" id="name-description">Particular Research Gate Autor</p></td>
            </tr>

            <!-- Google Scholar -->
            <tr class="form-field">
                <th scope="row"><label for="autores_googlescholar">Google Scholar</label></th>
                <td><input type="text" name="autores_googlescholar" id="autores_googlescholar" value="<?php echo esc_attr($valuegooglescholar);  ?>" size="40">
                <p class="description" id="name-description">Particular Google Scholar Autor</p></td>
            </tr>

        <?php
    }

    add_action( 'created_Autores', 'cc_autores_created_form_fields');
    add_action( 'edited_Autores', 'cc_autores_created_form_fields');

    function cc_autores_created_form_fields( $term_id){
        update_term_meta($term_id, 'autores_orcid', sanitize_text_field( $_POST['autores_orcid']));
        update_term_meta($term_id, 'autores_twitter', sanitize_text_field( $_POST['autores_twitter']));
        update_term_meta($term_id, 'autores_facebook', sanitize_text_field( $_POST['autores_facebook']));
        update_term_meta($term_id, 'autores_researchgate', sanitize_text_field( $_POST['autores_researchgate']));
        update_term_meta($term_id, 'autores_googlescholar', sanitize_text_field( $_POST['autores_googlescholar']));
    }

    



//add_filter( 'related_posts_by_taxonomy_template', 'my_related_posts_templates', 10, 2 );


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}


/*** COMMENTS **/


// Custom Callback
            
function your_theme_slug_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
        
        <div class="comment-wrap">
            <div class="comment-img">
                <?php echo get_avatar($comment,$args['avatar_size'],null,null,array('class' => array('img-responsive', 'img-circle') )); ?>
            </div>
            <div class="comment-body">
                <h4 class="comment-author"><?php echo get_comment_author_link(); ?></h4>
                <span class="comment-date"><?php printf(__('%1$s at %2$s', 'your-text-domain'), get_comment_date(),  get_comment_time()) ?></span>
                <?php if ($comment->comment_approved == '0') { ?><em><i class="fa fa-spinner fa-spin" aria-hidden="true"></i> <?php _e('Comment awaiting approval', 'your-text-domain'); ?></em><br /><?php } ?>
                <?php comment_text(); ?>
                <span class="comment-reply"> <?php comment_reply_link(array_merge( $args, array('reply_text' => __('Reply', 'your-text-domain'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?></span>
            </div>
        </div>
<?php }

// Enqueue comment-reply

add_action('wp_enqueue_scripts', 'your_theme_slug_public_scripts');

function your_theme_slug_public_scripts() {
    if (!is_admin()) {
        if (is_singular() && get_option('thread_comments')) { wp_enqueue_script('comment-reply'); }
    }
}

// Enqueue fontawesome

add_action('wp_enqueue_scripts', 'your_theme_slug_public_styles');

function your_theme_slug_public_styles() {
        wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all');
}


// Shortcode conteo ________________________________________________ poner esto en el functions.php
add_shortcode( 'shortcont', 'e_return_shortcont' );

function e_return_shortcont() {

    $host = "localhost";
    $user = "root";
    $pass = '';
    $database = "comuni64_contPost";
    $con = mysqli_connect($host, $user, $pass, $database);

    $varQuery = 'SELECT * FROM contPost WHERE id_post = "'.get_the_ID().'"';
    $varEjecuta = mysqli_query($con,$varQuery);
    $num_rows = mysqli_num_rows($varEjecuta);

    if ( $num_rows ) {
        // echo 'Existe registro sumar 1';
        $varUso = mysqli_fetch_array($varEjecuta);
        $varSumCont = $varUso['cont'] + 1;
        $varQueryUpd = 'UPDATE contPost SET cont = "'.$varSumCont.'" WHERE id_post = "'.get_the_ID().'"';
        $varEjec = mysqli_query($con, $varQueryUpd);
    }else{
        // echo 'No existe registro crearlo';
        $varQueryInsert = "INSERT INTO contPost (id_post, cont) VALUES ('".get_the_ID()."','1')";
        $varEjec = mysqli_query($con, $varQueryInsert);
    }

    $varQuery = 'SELECT * FROM contPost WHERE id_post = "'.get_the_ID().'"';
    $varEjecuta = mysqli_query($con,$varQuery);
    $varUso = mysqli_fetch_array($varEjecuta);
    
    return $varUso['cont'];
}
// Shortcode conteo ________________________________________________ poner esto en el functions.php



// Este es el shortcode que se debe poner en el lugar que quieras en el post
// [shortcont]




// Shortcode conteo
add_shortcode( 'shortcontDesc', 'e_return_shortcontDesc' );

function e_return_shortcontDesc() {

	$host = "localhost";
    $user = "root";
    $pass = '';
    $database = "comuni64_contPost";
	$con = mysqli_connect($host, $user, $pass, $database);

	$varQuery = 'SELECT * FROM contDescLib WHERE id_post = "'.get_the_ID().'"';
	$varEjecuta = mysqli_query($con,$varQuery);
	$varUso = mysqli_fetch_array($varEjecuta);
	
    return '<span id="contContDesc">'.$varUso['cont'].'</span>';
}
// Shortcode conteo


// Cargar script JS
function cargaScriptContDesc() {
    wp_enqueue_script( 'my-scripts', get_template_directory_uri() . '/contDesc.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'cargaScriptContDesc' );
// Cargar script JS

//REMOVE HTML THE EXCERPT //

remove_filter ('the_excerpt', 'wpautop');

?>