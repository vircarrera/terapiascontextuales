<div class="b-why">
    <?php 
    if( have_rows('por_que_elegirnos') ): //parent group field
        while( have_rows('por_que_elegirnos') ): the_row(); 

        $titulo = get_sub_field('titulo');
        $claim = get_sub_field('claim');

    ?>

        <h2 class="c-title e-subtitle-2"> <?php echo $titulo; ?></h2>   


            <?php if( have_rows('bloque_1') ): //child group field
                while( have_rows('bloque_1') ): the_row(); 
                $titulo = get_sub_field('titulo');
                $descripcion = get_sub_field('descripcion');
                $image = get_sub_field('imagen');
                // Image variables.
                $url = $image['url'];
                $title = $image['title'];
                $alt = $image['alt'];

                // Thumbnail size attributes.
                $size = 'thumbnail';
                $thumb = $image['sizes'][ $size ];
                if($image || $titulo || $descripcion):
            ?>
                <div class="e-why first"  data-aos="fade-up" data-aos-delay="300">
                    <figure class="e-image">
                        <!-- <a href="<?php //echo esc_url($url); ?>" title="<?php //echo esc_attr($title); ?>">                            
                        </a> -->
                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
                    </figure>

                    <div class="title-text">
                        <h4 class="c-subtitle e-subtitle-4"><?php echo $titulo; ?></h4>
                        <p class="text"><?php echo $descripcion; ?></p>
                    </div>
                </div><!-- TERMINA b-first -->
                <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?> <!-- close child group field -->
        

            <?php if( have_rows('bloque_2') ): //child group field
                while( have_rows('bloque_2') ): the_row(); 
                $titulo = get_sub_field('titulo');
                $descripcion = get_sub_field('descripcion');
                $image = get_sub_field('imagen');
                // Image variables.
                $url = $image['url'];
                $title = $image['title'];
                $alt = $image['alt'];

                // Thumbnail size attributes.
                $size = 'thumbnail';
                $thumb = $image['sizes'][ $size ];
                if($image || $titulo || $descripcion):
            ?>
                <div class="e-why second" data-aos="fade-up" data-aos-delay="450">
                    <figure class="e-image">
                        <!-- <a href="<?php //echo esc_url($url); ?>" title="<?php //echo esc_attr($title); ?>">                            
                        </a> -->
                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">
                    </figure>

                    <div class="title-text">
                        <h4 class="c-subtitle e-subtitle-4"><?php echo $titulo; ?></h4>
                        <p class="text"><?php echo $descripcion; ?></p>
                    </div>
                </div><!-- TERMINA b-second -->
                <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?> <!-- close child group field -->
            


            <?php if( have_rows('bloque_3') ): //child group field
                while( have_rows('bloque_3') ): the_row(); 
                $titulo = get_sub_field('titulo');
                $descripcion = get_sub_field('descripcion');
                $image = get_sub_field('imagen');
                // Image variables.
                $url = $image['url'];
                $title = $image['title'];
                $alt = $image['alt'];

                // Thumbnail size attributes.
                $size = 'thumbnail';
                $thumb = $image['sizes'][ $size ];
                if($image || $titulo || $descripcion):
            ?>
                <div class="e-why third" data-aos="fade-up" data-aos-delay="300">
                    <figure class="e-image">
                        <!-- <a href="<?php //echo esc_url($url); ?>" title="<?php //echo esc_attr($title); ?>">                            
                        </a> -->
                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">
                    </figure>

                    <div class="title-text">
                        <h4 class="c-subtitle e-subtitle-4"><?php echo $titulo; ?></h4>
                        <p class="text"><?php echo $descripcion; ?></p>
                    </div>
                </div><!-- TERMINA b-third -->
                <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?> <!-- close child group field -->
        

            <?php if( have_rows('bloque_4') ): //child group field
                while( have_rows('bloque_4') ): the_row(); 
                $titulo = get_sub_field('titulo');
                $descripcion = get_sub_field('descripcion');
                $image = get_sub_field('imagen');
                // Image variables.
                $url = $image['url'];
                $title = $image['title'];
                $alt = $image['alt'];

                // Thumbnail size attributes.
                $size = 'thumbnail';
                $thumb = $image['sizes'][ $size ];
                if($image || $titulo || $descripcion):
            ?>
                <div class="e-why fourth" data-aos="fade-up" data-aos-delay="450">
                    <figure class="e-image">
                        <!-- <a href="<?php //echo esc_url($url); ?>" title="<?php //echo esc_attr($title); ?>">
                        </a> -->
                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">
                    </figure>

                    <div class="title-text">
                        <h4 class="c-subtitle e-subtitle-4"><?php echo $titulo; ?></h4>
                        <p class="text"><?php echo $descripcion; ?></p>
                    </div>
                </div><!-- TERMINA b-fourth -->
                <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?> <!-- close child group field -->
        
        <h2 class="claim cta cta-link e-subtitle-2"> <?php echo $claim; ?></h2> </h2>

    <?php
        endwhile;
    endif;
    ?> <!-- close parent group field -->

</div> <!-- TERMINA C-WHY -->