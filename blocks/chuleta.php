<!-- SACAR SUBCAMPOS E IMAGEN POR ARRAY -->
<div class="war-front-form">
	<?php if( have_rows('ficha_de_la_persona') ): //parent group field
	while( have_rows('ficha_de_la_persona') ): the_row(); 
	// vars
	   $image = get_sub_field('imagen_de_la_persona');
	   $work = get_sub_field('ocupacion');
	   $web = get_sub_field('pagina_web');
       $linkedin = get_sub_field('linkedin');
       var_dump($web);
    ?>


	  <div class="war-front-member">
	    
        <?php        
       if( $image ):

        // Image variables.
        $url = $image['url'];
        $title = $image['title'];
        $alt = $image['alt'];


        // Thumbnail size attributes.
        $size = 'thumbnail';
        $thumb = $image['sizes'][ $size ];
        ?>


        <a href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>">
            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
        </a>

        <?php endif; ?>


		<p><?php echo $birth ?></p>
		<p><?php echo $phone ?></p>
		<p><?php echo $email ?></p>
        <?php endwhile; ?>
    <?php endif; ?>
<!-- ACABA SACAR SUBCAMPOS E IMAGEN POR ARRAY -->

<!-- SACAR CONTENIDO DE UN GRUPO DENTRO DE UN GRUPO -->
<div class="cosasdeprecio">
    <?php 
    if( have_rows('precio') ): //parent group field
        while( have_rows('precio') ): the_row(); 
    ?>
            <div class="precioeneuros">
                <?php if( have_rows('precio_en_euros') ): //child group field
                    while( have_rows('precio_en_euros') ): the_row(); 
                    // vars
                    $precioactual = get_sub_field('precio_actual');
                    $porcentajedescuento = get_sub_field('porcentaje_descuento');
                    $precioantesrebaja = get_sub_field('precio_antes_de_la_rebaja');
                    $linkclassonlive = get_sub_field('link_de_classonlive');
                ?>
                        <div><?php echo $precioactual; ?></div>
                        <div class="descuento"><?php echo $porcentajedescuento; ?></div>
                        <div><?php echo $precioantesrebaja; ?></div>     
                        <div class="e-switchprice"></div>
                    <?php endwhile; ?>
                <?php endif; ?> <!-- close child group field -->
            </div>

            <div class="precioenusd">
                <?php if( have_rows('precio_en_usd') ): //child group field
                    while( have_rows('precio_en_usd') ): the_row(); 
                    // vars
                    $precioactual = get_sub_field('precio_actual');
                    $porcentajedescuento = get_sub_field('porcentaje_descuento');
                    $precioantesrebaja = get_sub_field('precio_antes_de_la_rebaja');
                    $linkclassonlive = get_sub_field('link_de_classonlive_usd');
                ?>
                        <div><?php echo $precioactual; ?></div>
                        <div class="descuento"><?php echo $porcentajedescuento; ?></div>
                        <div><?php echo $precioantesrebaja; ?></div>     
                        <div class="e-switchprice"></div>
                    <?php endwhile; ?>
                <?php endif; ?> <!-- close child group field -->
            </div>

        <?php endwhile; ?> 
    <?php endif; ?> <!-- close parent group field -->
    
</div>
<!-- ACABA SACAR CONTENIDO DE UN GRUPO DENTRO DE UN GRUPO -->

<!-- SACAR CONTENIDO DENTRO DE GRUPO ACF -->
<?php 
    $indicecontenido = get_field('indice_de_contenido');
    if ($indicecontenido) :
?>
    <div class="totallections">
        <?php echo $indicecontenido['total_de_lecciones_+_tiempo']; ?>
    </div>
<?php endif; ?>
<!-- ACABA SACAR CONTENIDO DENTRO DE GRUPO ACF -->


<!-- ARTICULOS RELACIONADOS POR CATEGORÍA -->
    <!-- comienza wp-query -->
    <?php

    $id = get_the_ID();

    // La consulta con sus argumentos
    $relacionados = new WP_Query( array(
        'cat' => 1, 
        'posts_per_page' => 3,
        'orderby' => 'rand',
        'post__not_in' => array($id) 
    ));

    // El loop
    if ( $relacionados->have_posts() ) {while ( $relacionados->have_posts() ) {$relacionados->the_post();?>

        <?php 
        /* variables para cada imagen */
        $full = get_the_post_thumbnail_url(get_the_ID(),'full'); 
        $large = get_the_post_thumbnail_url(get_the_ID(),'large');
        $thumbnail = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); 
        $medium = get_the_post_thumbnail_url(get_the_ID(),'medium'); 
        ?>

            <article class="col-12 col-md-6 col-lg-4 articulo">

                <div class="articulo__relleno">

                    <div class="row no-gutters">
                        <picture class="col-6 col-md-12">
                            <source media="(min-width: 1200px)" srcset="<?php echo esc_url($medium); ?>">
                            <img src="<?php echo esc_url($thumbnail); ?>" alt="">
                        </picture>

                        <div class="col-6 col-md-12 d-flex align-items-center d-md-block">
                            <div class="articulo__contenido">
                                <h2 class="articulo__titulo"><?php the_title(); ?></h2>
                                <div class="articulo__extracto d-none d-md-block"><?php the_excerpt(); ?></div>
                            </div>
                        </div>
                    </div>

                    <a href="<?php the_permalink(); ?>" class="articulo__mas"></a>
            
                </div><!-- .articulo__relleno -->
            </article>

    <?php }} wp_reset_postdata(); ?>
    <!-- fin del wp-query -->

<!-- FIN ARTICULOS RELACIONADOS POR CATEGORÍA -->



<!-- SACAR CONTENIDO RELACIONADO EN OTRO SITIO-->
<?php $docentes = get_field('docente');
    foreach ($docentes as $docente): 
?>
    <div class="autor">
        <div class="imagennombreyocupacion">
            <figure class="imagen">
                <img src="<?php echo get_the_post_thumbnail_url($docente->ID, 'thumbnail');?>">
            </figure>
            <div class="nombre"><?php echo $docente->post_title; ?></div>
            <div class="ocupacion"></div>
            <div class="bio"></div>
            <a class="e-link" href="<?php echo get_page_link($docente->ID); ?>">Ver perfil completo</a>
        </div>
    </div>
<?php
    endforeach;
?>
<!-- ACABA SACAR CONTENIDO RELACIONADO -->
<!-- SACAR TODO CONTENIDO RELACIONADO EN OTRO SITIO Q TB SEA UN ACF-->
<?php $docentes = get_field('docente');
    foreach ($docentes as $post): 
?>
    <?php setup_postdata($post); ?>
    <div class="autor">
        <div class="imagennombreyocupacion">
            <figure class="imagen">
                <?php 
                    $full = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                    $large = get_the_post_thumbnail_url(get_the_ID(),'large');
                    $thumbnail = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); 
                    $medium = get_the_post_thumbnail_url(get_the_ID(),'medium'); 
                ?>
                <img src="<?php echo $thumbnail; ?>">
            </figure>
            <div class="nombre"><?php the_title(); ?></div>
            <?php if( have_rows('ficha_de_la_persona') ): //parent group field
                while( have_rows('ficha_de_la_persona') ): the_row(); 
                // vars
                $ocupacion = get_sub_field('ocupacion');
                $bio = get_sub_field('minibio');
            ?>
            <div class="ocupacion">
                <?php echo $ocupacion; ?>
            </div>
            <div class="bio">
                <?php echo $bio; ?>
            </div>
            <?php 
                endwhile;
            endif; 
                ?>
            <a class="e-link" href="#">Ver perfil completo</a>
        </div>
    </div>
<?php
    wp_reset_postdata(); 
    endforeach;
?>
<!-- ACABA SACAR CONTENIDO RELACIONADO EN OTRO SITIO Q TB SEA UN ACF-->

<!-- ARTICULOS RELACIONADOS MEDIANTE ETIQUETAS-->

<div class="b-article-related">
    <?php 
    $orig_post = $post;
    global $post;
    $tags = wp_get_post_tags($post->ID);
                                            
        if ($tags) {
            $tag_ids = array();
            foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
            $args=array(
            'tag__in' => $tag_ids,
            'post__not_in' => array($post->ID),
            'posts_per_page'=>4, //Cantidad de posts por página
            'orderby' => 'date' //Orden de posts
            );

                $my_query = new wp_query( $args );
                if( $my_query->have_posts() ) {

                    echo '<h2>Artículos relacionados</h2><div class="e-courses-row">';

                    while( $my_query->have_posts() ) {
                        $my_query->the_post(); ?>

                        <! – El listado de posts -->
                        <div class="e-card">
                            <a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
                                <div class="image"> 
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <h4 class="e-subtle-4"> <?php the_title(); ?> </h4>
                                <div class="name-time">
                                    <?php $autores = get_field('autor');
                                    foreach ($autores as $autor): 
                                    ?>
                                        <h3 class="e-author">
                                        Por <span><?php echo $autor->post_title; ?></span>
                                        </h3>
                                    <?php
                                    endforeach;              
                                    ?>
                                    <p class="e-time">
                                        <?php 
                                        $minLectura = get_field('minutos_de_lectura');
                                        ?> 
                                            <?php echo $minLectura; ?>   
                                    </p>
                                </div>
                            </a>
                        </div>

                    <?php }
                    echo '</div>';

                }}
                wp_reset_query(); ?>
                 
</div>

<!-- ACABA ARTICULOS RELACIONADOS MEDIANTE ETIQUETAS-->


<!-- INTENTO RELACIÓN BIDIRECCIONAL DE CURSOS EN PÁGINA PERSONAS -->

<?php 
    $args = [
            'post_type' => 'curso',
            'meta_query' => [

                'key' => 'persona',
                'value' => '"' . get_the_ID() . '"',
                'compare' => 'LIKE',
            ]
        ];
    $cursosPersona = get_posts($args);
?>

<?php 
    if($cursosPersona) : 
    foreach($cursosPersona as $cursoPersona) :
?> 
    <div class="cursopersona">
        <a href="<?php echo get_permalink($cursoPersona->ID); ?>">
            <div class="e-content">
                <h5 class="e-subtitle-3"><?php echo $cursoPersona->post_title; ?></h5>
                <p class="e-text"><?php echo $cursoPersona->post_excerpt; ?></p>
            </div>
        </a>
    </div>
<?php 
    endforeach;
    endif; 
?>

<!-- ACABA INTENTO RELACIÓN BIDIRECCIONAL DE CURSOS EN PÁGINA PERSONAS -->

<!-- INTENTO RELACIÓN BIDIRECCIONAL DE ARTÍCULOS EN PÁGINA PERSONAS -->
<?php 
    $args = [
            'post_type' => 'post',
            'meta_query' => [

                'key' => 'persona',
                'value' => '"' . get_the_ID() . '"',
                'compare' => 'LIKE',
            ]
        ];
    $postsPersona = get_posts($args);
?>

<?php 
    if($postsPersona) : 
    foreach($postsPersona as $postPersona) :
?> 
    <div class="investigacion">
        <a href="<?php echo get_permalink($postPersona->ID); ?>">
            <div class="e-content">
                <h5 class="e-subtitle-3"><?php echo $postPersona->post_title; ?></h5>
                <p class="e-text"><?php echo $postPersona->post_excerpt; ?></p>
            </div>
        </a>
    </div>
<?php 
    endforeach;
    endif; 
?>
<!-- ACABA INTENTO RELACIÓN BIDIRECCIONAL DE ARTÍCULOS EN PÁGINA PERSONAS -->

<!-- INTENTO RELACIÓN BIDIRECCIONAL DE INVESTIGACIONES EN PÁGINA PERSONAS -->
<?php 
    $args = [
            'post_type' => 'investigacion',
            'meta_query' => [
                'key' => 'persona',
                'value' => "" . get_the_ID() . "",
                'compare' => 'LIKE'
            ],
        ];
    $investigacionesPersona = get_posts($args);
?>

<?php 
    if($investigacionesPersona) : 
    foreach($investigacionesPersona as $investigacionPersona) :
?> 
    <div class="investigacion">
        <a href="<?php echo get_permalink($investigacionPersona->ID); ?>">
            <div class="e-content">
                <h5 class="e-subtitle-3"><?php echo $investigacionPersona->post_title; ?></h5>
                <p class="e-text"><?php echo $investigacionPersona->post_excerpt; ?></p>
            </div>
        </a>
    </div>
<?php 
    endforeach;
    endif; 
?>
<!-- ACABA INTENTO RELACIÓN BIDIRECCIONAL DE INVESTIGACIONES EN PÁGINA PERSONAS -->


<!-- cosas que estaban en el functions -->

// //TODOS LOS VINCULOS CSS Y JS

// //
// // CSS & JS Loading for Google Fonts
// //
// function wpb_add_google_fonts()
// {
//     wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap', false);
// }
// add_action('wp_enqueue_scripts', 'wpb_add_google_fonts');


// //VINCULOS CSS
// function load_css_js()
// {   
//     wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
// }
// add_action('wp_enqueue_scripts', 'load_css_js');


// //LIBRERIA JQ
// function replace_jquery() {
//     if (!is_admin()) {
//       wp_deregister_script('jquery');
//       wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.1.0.min.js' , false, NULL, true );
//       wp_enqueue_script('jquery');
//     }
//   }
// add_action('init', 'replace_jquery');

// //VINCULOS JS
// function main_scripts() {
// wp_enqueue_script( 'bt4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
// wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ));
// }
// add_action( 'wp_footer', 'main_scripts' );

<!-- acaban cosas que estaban en el functions -->

<!-- vainas de nombre del tema -->

/*   
Theme Name: Terapias-theme
Theme URI: the-theme's-homepage
Description: a-brief-description
Author: Virginia y Maria
Author URI: your-URI
Version: a-number--optional
.
General comments/License Statement if any.
.
*/

<!-- acaban las vaines del nombre del tema -->