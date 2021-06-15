<?php /* Template Name: Personas */ ?>

<?php get_header(); ?>

    <div class="content equipo">
        <div class="c-content">
            <div class="b-info">
                    <div class="b-intro">
                        <h1 class="e-title"><?php the_title(); ?></h1>
                        <div class="b-start">
                            <?php 
                                $descripcion = get_field('descripcion');
                                if ($descripcion) :
                            ?>
                                
                                <p class="e-text"> <?php echo $descripcion['texto']; ?> </p>
                                
                            <?php endif; ?>

                            <?php 
                                $descripcion = get_field('descripcion');
                                $image = $descripcion['imagen'];
                                // Image variables.
                                $url = $image['url'];
                                $title = $image['title'];
                                $alt = $image['alt'];
                                // Thumbnail size attributes.
                                $size = 'thumbnail';
                                $thumb = $image['sizes'][ $size ];

                                if ($image) :
                                
                            ?>
                                    <div class="e-illustration" data-aos="fade-up">
                                        <div class="image-wrapper">
                                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" title="<?php echo esc_attr($title); ?>">                 
                                        </div>     
                                    </div>
                                <?php endif; ?>
                        </div> <!-- cierra b-start -->
                    </div> <!-- cierra c-intro -->
                    
                    <div class="b-goals">
                        
                        <div class="title-info">
                            <?php 
                                $goals = get_field('primera_seccion:_objetivos');
                                $titulo = $goals['titulo'];
                                $text = $goals['texto'];

                            if ($titulo) :
                            ?>
                                <h2 class="e-subtitle-2"> <?php echo $titulo; ?></h2>

                            <?php endif; 
                            if ($text) :
                            ?>
                                <p class="e-text"> <?php echo $text; ?> </p>
                            <?php endif; 
                            ?>
                                                    
                        </div><!-- cierra title-info -->

                        <?php                             
                        $image = $goals['imagen'];
                        // Image variables.
                        $url = $image['url'];
                        $title = $image['title'];
                        $alt = $image['alt'];
                        // Thumbnail size attributes.
                        $size = 'thumbnail';
                        $thumb = $image['sizes'][ $size ];

                        if ($image) :                            
                        ?>
                        <div class="e-illustration" data-aos="fade-up" data-aos-delay="450">
                            <div class="image-wrapper">
                                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" title="<?php echo esc_attr($title); ?>">                            
                            </div>
                        </div>
                        <?php endif; ?>

                    </div><!-- cierra b-goals -->

                    <div class="b-methodology">
                        
                        <div class="title-info">
                            <?php 
                                $methodology = get_field('segunda_seccion:_metodologia');
                                $titulo = $methodology['titulo'];
                                $text = $methodology['texto'];

                            if ($titulo) :
                            ?>
                                <h2 class="e-subtitle-2"> <?php echo $titulo; ?></h2>

                            <?php endif; 
                            if($text) : ?>

                                <p class="e-text"> <?php echo $text; ?> </p>

                            <?php endif; 
                            ?>
                                                    
                        </div><!-- cierra title-info -->
                            <?php                             
                                $image = $methodology['imagen'];
                                // Image variables.
                                $url = $image['url'];
                                $title = $image['title'];
                                $alt = $image['alt'];
                                // Thumbnail size attributes.
                                $size = 'thumbnail';
                                $thumb = $image['sizes'][ $size ];

                            if ($image) :                            
                            ?>
                                <div class="e-illustration" data-aos="fade-up" data-aos-delay="600">
                                    <div class="image-wrapper">
                                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" title="<?php echo esc_attr($title); ?>">
                                    </div>                        
                                </div>
                            <?php endif; ?>

                    </div><!-- cierra b-methodology -->

            </div><!-- termina c-content -->

            <div class="b-team">
                <div class="title-description">
                    <?php 
                    if( have_rows('tercera_seccion:_conocenos') ): //parent group field
                        while( have_rows('tercera_seccion:_conocenos') ): the_row(); 
                        $titulo = get_sub_field('titulo');
                        $descripcion = get_sub_field('descripcion');  
                    ?>
                        <?php if ($titulo) :?>
                            <h2 class="e-subtitle-2"> <?php echo $titulo; ?></h2>
                        <?php endif; 
                            if ($descripcion) :
                        ?>
                            <p class="e-text"> <?php echo $descripcion; ?></p>
                        <?php endif; ?>
                    <?php
                        endwhile;
                    endif;
                    ?> <!-- close parent group field -->
                </div>
                <div class="b-filter__supervisors">
                    <?php get_template_part( 'blocks/block-filter-equipo-supervisors' ); ?>                
                </div>
                <div class="b-filter__docents">
                    <?php get_template_part( 'blocks/block-filter-equipo-docents' ); ?>                
                </div>
                <div class="b-filter__embassadors">
                    <?php get_template_part( 'blocks/block-filter-equipo-embassadors' ); ?>                
                </div>
            </div><!-- termina b-team -->
        </div><!-- termina c-content -->
    </div><!-- termina content equipo -->

<?php get_footer(); ?>
