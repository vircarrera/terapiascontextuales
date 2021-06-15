<?php get_header(); ?>


<div class="b-slider"> 
    <?php
    if( have_rows('slider_home') ): //parent group field
        while( have_rows('slider_home') ): the_row();

    ?>
        <div class="e-slider">
            <?php
            if( have_rows('destacado_1') ): //child group field
                while( have_rows('destacado_1') ): the_row();                     
            // vars
            $image = get_sub_field('imagen_de_fondo');
            $h2 = get_sub_field('titulo');
            $subtitle = get_sub_field('subtitulo');
            $description = get_sub_field('descripcion');  
            $button = get_sub_field('boton');    
            // Image variables.
            $url = $image['url'];
            $title = $image['title'];
            $alt = $image['alt'];
            // Thumbnail size attributes.
            // $size = 'full';
            // $thumb = $url['sizes'][ $size ];  
            ?>
                <div class="e-slide">
                    <div class="e-image" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-offset="0">
                        <img src="<?php echo $url; ?>" alt="<?php echo esc_attr($alt); ?>" title="<?php echo esc_attr($title); ?>"> 
                    </div>
                    <div class="w-1310">
                        <h2 class="c-title e-title-banner"> <?php echo $h2; ?> </h2>
                        <h3 class="c-subtitle e-subtitle-banner"> <?php echo $subtitle; ?> </h3>
                        <a href="<?php echo esc_url($button["url"] ); ?>" class="cta cta-button"><?php echo $button["title"] ?></a>    
                    </div>
                </div>
            <?php
                endwhile;//child group field
            endif;
            ?>
        </div>
    <?php
        endwhile;
    endif; //parent group field
    ?>
    
</div><!-- termina c-slider-->

<div class="content home w-1310">

    <?php
    $titulo = get_field('titulo_de_la_pagina')
    ?>
    <h1 class="c-title c-title--hero"> <?php echo $titulo ?> </h1>

    <section class="b-direct-accesses" data-aos="fade-up" data-aos-delay="300">
        <div class="b-direct-accesses">

            <?php
            if( have_rows('primera_seccion:_accesos_directos') ): //parent group field
                while( have_rows('primera_seccion:_accesos_directos') ): the_row(); 
            ?>

                <?php
                if( have_rows('primer_bloque') ): //parent group field
                    while( have_rows('primer_bloque') ): the_row(); 
                    // vars
                    $titulo = get_sub_field('titulo');
                    $icono = get_sub_field('icono');
                    $descripcion = get_sub_field('descripcion');
                    $link = get_sub_field('boton');

                    // Image variables.
                    $url = $icono['url'];
                    $title = $icono['title'];
                    $alt = $icono['alt'];
                    // Thumbnail size attributes.
                    $size = 'thumbnail';
                    $thumb = $icono['sizes'][ $size ];

                    if($titulo  || $icono || $descripcion || $link):     

                    //link attributes
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <div class="e-direct-accesses">
                            <div class="e-image">                            
                                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" title="<?php echo esc_attr($title);?>">     
                            </div>
                            <h2 class="c-subtitle e-subtitle-2"> <?php echo $titulo ?> </h2>
                            <p class="e-text"> <?php echo $descripcion ?> </p>
                            <a class="cta cta-link e-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        </div>
                
                    <?php
                        endif;
                    endwhile; ?>
                <?php endif; ?>

                <?php
                if( have_rows('segundo_bloque') ): //parent group field
                    while( have_rows('segundo_bloque') ): the_row(); 
                    // vars
                    $titulo = get_sub_field('titulo');
                    $icono = get_sub_field('icono');
                    $descripcion = get_sub_field('descripcion');
                    $link = get_sub_field('boton');

                    // Image variables.
                    $url = $icono['url'];
                    $title = $icono['title'];
                    $alt = $icono['alt'];
                    // Thumbnail size attributes.
                    $size = 'thumbnail';
                    $thumb = $icono['sizes'][ $size ];

                    if($titulo  || $icono || $descripcion || $link): 

                    //link attributes
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
  
                    ?>
                        <div class="e-direct-accesses">
                            <div class="e-image">                            
                                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" title="<?php echo esc_attr($title);?>">                                     
                            </div>
                            <h2 class="c-subtitle e-subtitle-2"> <?php echo $titulo ?> </h2>                            
                            <p class="e-text"> <?php echo $descripcion ?> </p>
                            <a class="cta cta-link e-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        </div>
                    <?php 
                        endif;
                    endwhile; ?>
                <?php endif; ?>

                <?php
                if( have_rows('tercer_bloque') ): //parent group field
                    while( have_rows('tercer_bloque') ): the_row(); 
                    // vars
                    $titulo = get_sub_field('titulo');
                    $icono = get_sub_field('icono');
                    $descripcion = get_sub_field('descripcion');
                    $link = get_sub_field('boton');

                    // Image variables.
                    $url = $icono['url'];
                    $title = $icono['title'];
                    $alt = $icono['alt'];
                    // Thumbnail size attributes.
                    $size = 'thumbnail';
                    $thumb = $icono['sizes'][ $size ];

                    if($titulo  || $icono || $descripcion || $link): 
                        
                    //link attributes
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
  
                    ?>
                        <div class="e-direct-accesses">
                            <div class="e-image">                            
                                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" title="<?php echo esc_attr($title);?>">                                     
                            </div>
                            <h2 class="c-subtitle e-subtitle-2"> <?php echo $titulo ?> </h2>                            
                            <p class="e-text"> <?php echo $descripcion ?> </p>
                            <a class="cta cta-link e-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        </div>
                    <?php 
                        endif;
                    endwhile; ?>
                <?php endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>

        </div><!-- termina b-direct-accesses -->
    </section><!-- termina c-direct-accesses-->

    <section class="b-our-courses">
        <?php
        if( have_rows('segunda_seccion:_seleccion_de_cursos') ): //parent group field
            while( have_rows('segunda_seccion:_seleccion_de_cursos') ): the_row(); 

        // vars
        $title = get_sub_field('titulo_del_bloque');
        $subtitle = get_sub_field('subtitulo_del_bloque');   
        $boton = get_sub_field('boton');
        ?>
            <h2 class="c-title e-subtitle-2"> <?php echo $title ?> </h2>
            <h3 class="c-subtitle e-subtitle-3" data-aos="fade-up"> <?php echo $subtitle ?> </h3>
            <div class="e-our-courses">
                <?php get_template_part( 'blocks/selection-courses' ); ?>
            </div>
            <a class="cta cta-link e-subtitle-2"  data-aos="fade-up" href="<?php echo $boton['url'];?>"><?php echo $boton['title']; ?> <i class="iconos ico-flecha-der"></i></a>
        <?php
            endwhile;
        endif;
        ?>
    </section> <!-- termina b-our-courses-->

    <section>
    <?php get_template_part( 'blocks/block-why-choose-us' ); ?><!-- POR QUÉ ELEGIRNOS -->
    </section>

    <section data-aos="fade-up">
    <?php get_template_part( 'blocks/block-university-logos' ); ?><!-- ENTIDADES QUE PARTICIPAN -->
    </section>

    <section class="section-opinion">
    <?php get_template_part( 'blocks/block-opinions' ); ?><!-- OPINIONES DE ALUMNXS -->
    </section>

    <section class="b-contact" id="contact">
        <?php
        if( have_rows('sexta_seccion:_contacto') ): //parent group field
            while( have_rows('sexta_seccion:_contacto') ): the_row();
            // vars
            $title = get_sub_field('titulo_de_la_seccion');
            $subtitle = get_sub_field('subtitulo');
            $description = get_sub_field('descripcion');
        ?>
                <h2 class="c-title e-subtitle-2" data-aos="fade-up"> <?php echo $title; ?> </h2>
                <div class="col__left" data-aos="fade-up">
                    <h3 class="c-subtitle e-subtitle-3"> <?php echo $subtitle; ?> </h3>
                    <p class="description"> <?php echo $description; ?> </p>

                    <?php
                    if( have_rows('direccion') ): //child group field
                        while( have_rows('direccion') ): the_row();
                        // vars
                        $email = get_sub_field('email');
                        $phone1 = get_sub_field('telefono_1');
                        $phone2 = get_sub_field('telefono_2');
                        $direction = get_sub_field('direccion');
                    ?>

                        <p class="e-email"><a class="cta cta-link" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
                        <p class="e-phone"> <?php echo $phone1; ?> </p>
                        <p class="e-phone"> <?php echo $phone2; ?> </p>
                        <p class="e-direction"> <?php echo $direction; ?> </p>

                    <?php
                        endwhile; //child group field
                    endif;
                    ?>
                </div>

                <div class="col__right" data-aos="fade-up" data-aos-delay="450">
                    <div class="e-form"><?php echo do_shortcode('[contact-form-7 id="824" title="Formulario de contacto home"]') ?></div>
                </div>
        <?php
            endwhile; //parent group field
        endif;
        ?>    
    </section><!--  CIERRA b-contact -->

</div><!-- cierra content home -->



<?php get_footer(); ?>