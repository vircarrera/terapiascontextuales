<?php

//MENUS
function register_my_menus() {
    register_nav_menus(
      array(
        'menutop' => __( 'Menú superior' ), 
        'menuredes' => __( 'Menú de redes' ),
        'menulegal' => __( 'Menú legal' )
      )
    );
  }
add_action( 'init', 'register_my_menus' );  

// ZONA WIDGETS PIE
if(function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'          => 'Pie',
        'id'            => 'pie',
        'before_widget' => '<div id="%1$s" class="pie__widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="pie__titulos">',
        'after_title'   => '</h3>'
    ));
}

//EXTRACTO
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// ELIPSIS
function new_excerpt_more( $more ) {
	return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//IMAGEN DESTACADA
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' ); }

// COSAS PARA ESTILOS
function wps_deregister_styles()
{
	wp_dequeue_style('wp-block-library');
}
add_action('wp_print_styles', 'wps_deregister_styles', 100);

function load_css_js()
{
	wp_enqueue_style('mariavirsheet', get_stylesheet_uri(), false, NULL, 'all');
	wp_enqueue_style('fancybox', get_template_directory_uri() . '/js/vendor/fancybox/fancybox.css', false, NULL, 'all');
	wp_enqueue_style('flickity', get_template_directory_uri() . '/js/vendor/flickity/flickity.css', false, NULL, 'all');
	wp_enqueue_style('aos', get_template_directory_uri() . '/js/vendor/aos/aos.css', false, NULL, 'all');
	
	wp_deregister_script('wp-embed');

	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', NULL, NULL, true);
	wp_enqueue_script('jquery');

	wp_register_script('aos', get_template_directory_uri() . '/js/vendor/aos/aos.js', NULL, NULL, true);
	wp_enqueue_script('aos');

	wp_register_script('carousels', get_template_directory_uri() . '/js/carousels.js', array('jquery'), NULL, false);
	wp_enqueue_script('carousels');

	wp_register_script('flickity', get_template_directory_uri() . '/js/vendor/flickity/flickity.js', NULL, NULL, true);
	wp_enqueue_script('flickity');

	wp_register_script('flickity-lazyload', get_template_directory_uri() . '/js/vendor/flickity/bg-lazyload.js', NULL, NULL, true);
	wp_enqueue_script('flickity-lazyload');

	wp_register_script('fancybox', get_template_directory_uri() . '/js/vendor/fancybox/fancybox.js', NULL, NULL, true);
	wp_enqueue_script('fancybox');

	wp_register_script('functions', get_template_directory_uri() . '/js/functions.js', NULL, NULL, true);
	wp_enqueue_script('functions');

	wp_register_script('base', get_template_directory_uri() . '/js/base.js', NULL, NULL, true);
	wp_enqueue_script('base');

}
add_action('wp_enqueue_scripts', 'load_css_js');



// Librería Lighbox
function bps_scripts_lightbox() {
    wp_enqueue_script('lightbox-js', '//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js', array('jquery'));
    wp_enqueue_style('lightbox-css', '//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css');
    }
add_action('wp_enqueue_scripts', 'bps_scripts_lightbox');

// Comentarios
// FORMULARIO DE ACCESO A COMENTARIOS
function campos_formulario( $fields) {

    //Variables necesarias básicas como que el email es obligatorio
    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	
    // campos por defecto del formulario que vamos a introducir con nuestros cambios
    $fields = array(
		
    // NOMBRE
    'author' =>
	'<input id="author" placeholder="Nombre" 
	class="nombre" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . 
	'" size="30"' . $aria_req . ' />',

    // EMAIL
    'email' =>
	'<input id="email" placeholder="Email" 
	class="email" name="email" type="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />',
	);
	
	return $fields;
    }
    add_filter('comment_form_default_fields', 'campos_formulario');
    
//COPYRIGHT
function display_copyright( $iYear = null, $szSeparator = " - ", $szTail = '. Todos los derechos reservados.' )
{echo '<div class="copyright">' . display_years( $iYear, $szSeparator, false ) . ' &copy; ' . get_bloginfo('name') . $szTail . '</div>';}
function display_years( $iYear = null, $szSeparator = " - ", $bPrint = true )
{
$iCurrentYear = ( date( "Y" ) );
if ( is_int( $iYear ) )
{$iYear = ( $iCurrentYear > $iYear ) ? $iYear = $iYear . $szSeparator . $iCurrentYear : $iYear;
} else {
$iYear = $iCurrentYear;}
if ( $bPrint == true ) echo $iYear; else return $iYear;
}
/*function add_google_analytics() {
    echo '<script src="https://www.google-analytics.com/ga.js" type="text/javascript"></script>';
    echo '<script type="text/javascript">';
    echo 'var pageTracker = _gat._getTracker("UA-XXXXX-X");';
    echo 'pageTracker._trackPageview();';
    echo '</script>';
}
add_action('wp_footer', 'add_google_analytics');*/



function bps_cookie_script () {
?>

<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script type="text/javascript">
window.cookieconsent_options = {"message":"Típico aviso de cookies. Si sigues navegando significa que aceptas su uso.","dismiss":"¡Genial!","learnMore":"Más info","link":"https://www.terapiascontextuales.com/cookies/","theme":"dark-bottom"};
</script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
<!-- End Cookie Consent plugin -->

<?php
}
add_action('wp_head', 'bps_cookie_script');

// PHP para agregar Breadcrumb a WordPress   
function the_breadcrumb() {
	if (!is_home()) {
		echo '<span title="';
		echo get_option('home');
	        echo '">';
		bloginfo('name');
		echo "</span> » ";
		if (is_page_template()) {
				echo " » ";
                echo the_title();

        
                	
		} elseif (is_single()) {
			echo the_title();
		}
	}
}    

// fin del breadcrumb

/* ACF Configuration */

if (function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(array(
        'page_title' 	=> 'Opciones',
        'menu_title' 	=> 'Opciones',
    ));
}

/* CUSTOM POST TYPES */

function cursos() {
    $labels = array(
		'name'                  => _x( 'Cursos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Curso', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Cursos', 'text_domain' ),
		'name_admin_bar'        => __( 'Cursos', 'text_domain' ),
		'archives'              => __( 'Archivo de cursos', 'text_domain' ),
		'attributes'            => __( 'Atributos del curso', 'text_domain' ),
		'parent_item_colon'     => __( 'Curso padre', 'text_domain' ),
		'all_items'             => __( 'Todos los cursos', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo curso', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo curso', 'text_domain' ),
		'edit_item'             => __( 'Editar curso', 'text_domain' ),
		'update_item'           => __( 'Actualizar curso', 'text_domain' ),
		'view_item'             => __( 'Ver curso', 'text_domain' ),
		'view_items'            => __( 'Ver cursos', 'text_domain' ),
		'search_items'          => __( 'Buscar cursos', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Noencontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el curso', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido', 'text_domain' ),
		'items_list'            => __( 'Listado de cursos', 'text_domain' ),
		'items_list_navigation' => __( 'Lista navegable de cursos', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de lista de cursos', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Curso', 'text_domain' ),
		'description'           => __( 'Entradas de cursos', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
    );
    register_post_type( 'curso', $args );
}
add_action( 'init', 'cursos', 0 );

function investigaciones() {

    $labels = array(
		'name'                  => _x( 'Investigaciones', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Investigación', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Investigaciones', 'text_domain' ),
		'name_admin_bar'        => __( 'Entradas de Investigación', 'text_domain' ),
		'archives'              => __( 'Archivos de entradas de Investigación', 'text_domain' ),
		'attributes'            => __( 'Atributos de entradas de Investigación', 'text_domain' ),
		'parent_item_colon'     => __( 'Entrada de Investigación padre', 'text_domain' ),
		'all_items'             => __( 'Todas las entradas de Investigación', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nueva entrada de Investigación', 'text_domain' ),
		'add_new'               => __( 'Añadir nueva', 'text_domain' ),
		'new_item'              => __( 'Añadir nueva entrada de Investigación', 'text_domain' ),
		'edit_item'             => __( 'Editar entrada de Investigación', 'text_domain' ),
		'update_item'           => __( 'Actualizar entrada de Investigación', 'text_domain' ),
		'view_item'             => __( 'Ver entrada de Investigación', 'text_domain' ),
		'view_items'            => __( 'Ver entradas de Investigación', 'text_domain' ),
		'search_items'          => __( 'Buscar entradas de Investigación', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en la entrada de Investigación', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en esta entrada de Investigación', 'text_domain' ),
		'items_list'            => __( 'Listado de entradas de Investigación', 'text_domain' ),
		'items_list_navigation' => __( 'Lista navegable de entradas de Investigación', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de entradas de Investigación', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Investigación', 'text_domain' ),
		'description'           => __( 'Entradas de Investigación', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'investigacion', $args );
}
add_action( 'init', 'investigaciones', 0 );

function personas() {
    $labels = array(
		'name'                  => _x( 'Personas', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Persona', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Equipo', 'text_domain' ),
		'name_admin_bar'        => __( 'Personas', 'text_domain' ),
		'archives'              => __( 'Archivo de persona', 'text_domain' ),
		'attributes'            => __( 'Atributos de persona', 'text_domain' ),
		'parent_item_colon'     => __( 'Persona padre', 'text_domain' ),
		'all_items'             => __( 'Todas las personas', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nueva persona', 'text_domain' ),
		'add_new'               => __( 'Añadir nueva', 'text_domain' ),
		'new_item'              => __( 'Nueva persona', 'text_domain' ),
		'edit_item'             => __( 'Editar persona', 'text_domain' ),
		'update_item'           => __( 'Actualizar persona', 'text_domain' ),
		'view_item'             => __( 'Ver persona', 'text_domain' ),
		'view_items'            => __( 'Ver personas', 'text_domain' ),
		'search_items'          => __( 'Buscar persona', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la basura', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en la persona', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Acualizar en esta persona', 'text_domain' ),
		'items_list'            => __( 'Lista de personas', 'text_domain' ),
		'items_list_navigation' => __( 'Lista navegable de personas', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de lista de personas', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Persona', 'text_domain' ),
		'description'           => __( 'Fichas de personas', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-universal-access',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'persona', $args );
}
add_action( 'init', 'personas', 0 );


/* CUSTOM TAXONOMY */

// Register Custom Taxonomy
function thypeofstudy() {

    $labels = array(
        'name'                       => 'Tipos de investigación',
        'singular_name'              => 'Tipo de investigación',
        'menu_name'                  => 'Tipos de investigación',
        'all_items'                  => 'Todos los tipos de investigación',
        'parent_item'                => 'Tipo de investigación superior',
        'parent_item_colon'          => 'Tipo de investigación superior:',
        'new_item_name'              => 'Nuevo tipo de investigación',
        'add_new_item'               => 'Añadir nuevo tipo de investigación',
        'edit_item'                  => 'Editar tipo de investigación',
        'update_item'                => 'Actualizar tipo de investigación',
        'view_item'                  => 'Ver tipo de investigación',
        'separate_items_with_commas' => 'Separar tipo de investigación con comas',
        'add_or_remove_items'        => 'Añadir o eliminar tipo de investigación',
        'choose_from_most_used'      => 'Elegir de entre los más usados',
        'popular_items'              => 'Tipos de investigación populares',
        'search_items'               => 'Buscar tipos de investigación',
        'not_found'                  => 'No encontrado',
        'no_terms'                   => 'No encontrado',
        'items_list'                 => 'Lista de tipos de investigación',
        'items_list_navigation'      => 'Navegación de lista tipo de investigación',
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'thype-of-investigation', array( 'investigacion' ), $args );

}
add_action( 'init', 'thypeofstudy', 0 );

// Register Custom Taxonomy personas
function personrole() {

    $labels = array(
        'name'                       => 'Roles de la persona',
        'singular_name'              => 'Rol de la persona',
        'menu_name'                  => 'Roles de persona',
        'all_items'                  => 'Todos los roles de persona',
        'parent_item'                => 'Rol de persona superior',
        'parent_item_colon'          => 'Rol de persona superior:',
        'new_item_name'              => 'Nuevo rol de persona',
        'add_new_item'               => 'Añadir nuevo rol de persona',
        'edit_item'                  => 'Editar rol de persona',
        'update_item'                => 'Actualizar rol de persona',
        'view_item'                  => 'Ver rol de persona',
        'separate_items_with_commas' => 'Separar rol de persona con comas',
        'add_or_remove_items'        => 'Añadir o eliminar roles de persona',
        'choose_from_most_used'      => 'Elegir de entre los roles de persona más usados',
        'popular_items'              => 'Roles de persona populares',
        'search_items'               => 'Buscar roles de persona',
        'not_found'                  => 'No encontrado',
        'no_terms'                   => 'No encontrado',
        'items_list'                 => 'Lista de roles de persona',
        'items_list_navigation'      => 'Navegación de roles de persona',
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'person-role', array( 'persona' ), $args );

}
add_action( 'init', 'personrole', 0 );

// Register Custom Taxonomy investigaciones
function interventiontype() {

	$labels = array(
		'name'                       => _x( 'Tipologías de intervención', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Tipología de intervención', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Tipologías de intervención', 'text_domain' ),
		'all_items'                  => __( 'Todos las tipologías de intervención', 'text_domain' ),
		'parent_item'                => __( 'Tipología de intervención superior', 'text_domain' ),
		'parent_item_colon'          => __( 'Tipología de intervención superior:', 'text_domain' ),
		'new_item_name'              => __( 'Nueva tipología de intervención', 'text_domain' ),
		'add_new_item'               => __( 'Añadir nueva tipología de intervención', 'text_domain' ),
		'edit_item'                  => __( 'Editar tipología de intervención', 'text_domain' ),
		'update_item'                => __( 'Actualizar tipología de intervención', 'text_domain' ),
		'view_item'                  => __( 'Ver tipología de intervención', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separar tipologías de intervención con comas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Añadir o eliminar tipologías de intervención', 'text_domain' ),
		'choose_from_most_used'      => __( 'Elegir de las más usadas', 'text_domain' ),
		'popular_items'              => __( 'Tipologías de intervención populares', 'text_domain' ),
		'search_items'               => __( 'Buscar tipologías de intervención', 'text_domain' ),
		'not_found'                  => __( 'No encontrado', 'text_domain' ),
		'no_terms'                   => __( 'No encontrado', 'text_domain' ),
		'items_list'                 => __( 'Lista de tipologías de intervención', 'text_domain' ),
		'items_list_navigation'      => __( 'Navegación lista tipologías de intervención', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'intervention-type', array( 'curso' ), $args );

}
add_action( 'init', 'interventiontype', 0 );

// Register Custom Taxonomy cursos
function courseduration() {

	$labels = array(
		'name'                       => _x( 'Duraciones de curso', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Duración del curso', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Duraciones de curso', 'text_domain' ),
		'all_items'                  => __( 'Todas las duraciones de curso', 'text_domain' ),
		'parent_item'                => __( 'Duración de curso superior', 'text_domain' ),
		'parent_item_colon'          => __( 'Duración de curso superior:', 'text_domain' ),
		'new_item_name'              => __( 'Nueva duración de curso', 'text_domain' ),
		'add_new_item'               => __( 'Añadir nueva duración de curso', 'text_domain' ),
		'edit_item'                  => __( 'Editar duración de curso', 'text_domain' ),
		'update_item'                => __( 'Actualizar duración de curso', 'text_domain' ),
		'view_item'                  => __( 'Ver duración de curso', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separar tipos duraciones de curso con comas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Añadir o eliminar duraciones de curso', 'text_domain' ),
		'choose_from_most_used'      => __( 'Elegir de las más usadas', 'text_domain' ),
		'popular_items'              => __( 'Duraciones de curso populares', 'text_domain' ),
		'search_items'               => __( 'Buscar duraciones de curso', 'text_domain' ),
		'not_found'                  => __( 'No encontrado', 'text_domain' ),
		'no_terms'                   => __( 'No encontrado', 'text_domain' ),
		'items_list'                 => __( 'Lista de duraciones de curso', 'text_domain' ),
		'items_list_navigation'      => __( 'Navegación lista duraciones de curso', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'course-duration', array( 'curso' ), $args );

}
add_action( 'init', 'courseduration', 0 );

// Register Custom Taxonomy cursos
function patienttypology() {

	$labels = array(
		'name'                       => _x( 'Tipologías de paciente', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Tipología de paciente', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Tipologías de paciente', 'text_domain' ),
		'all_items'                  => __( 'Todas las tipologías de paciente', 'text_domain' ),
		'parent_item'                => __( 'Tipología de paciente superior', 'text_domain' ),
		'parent_item_colon'          => __( 'Tipología de paciente superior:', 'text_domain' ),
		'new_item_name'              => __( 'Nueva tipología de paciente', 'text_domain' ),
		'add_new_item'               => __( 'Añadir nueva tipología de paciente', 'text_domain' ),
		'edit_item'                  => __( 'Editar tipología de paciente', 'text_domain' ),
		'update_item'                => __( 'Actualizar tipología de paciente', 'text_domain' ),
		'view_item'                  => __( 'Ver tipología de paciente', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separar tipología de paciente con comas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Añadir o eliminar tipología de paciente', 'text_domain' ),
		'choose_from_most_used'      => __( 'Elegir de las más usadas', 'text_domain' ),
		'popular_items'              => __( 'Tipologías de paciente populares', 'text_domain' ),
		'search_items'               => __( 'Buscar tipologías de paciente', 'text_domain' ),
		'not_found'                  => __( 'No encontrado', 'text_domain' ),
		'no_terms'                   => __( 'No encontrado', 'text_domain' ),
		'items_list'                 => __( 'Lista de tipologías de paciente', 'text_domain' ),
		'items_list_navigation'      => __( 'Navegación lista de tipologías de paciente', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'patient-typology', array( 'curso' ), $args );

}
add_action( 'init', 'patienttypology', 0 );

//PERMITIR SUBIR IMÁGENES SVG


function dmc_add_svg_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'dmc_add_svg_mime_types');


//paginador

?>