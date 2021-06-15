<div class="b-opinions">
    <?php
    if( have_rows('quinta_seccion:_opiniones') ): //parent group field
        while( have_rows('quinta_seccion:_opiniones') ): the_row();
        // vars
        $title = get_sub_field('titulo_de_la_seccion');
    ?>
            <h2 class="title e-subtitle-2"> <?php echo $title; ?> </h2>

            <div class="e-opinions">
            <?php
            if( have_rows('opinion_1') ): //child group field
                while( have_rows('opinion_1') ): the_row();                     
            // vars
            $name = get_sub_field('nombre');
            $job = get_sub_field('ocupacion_y_procedencia');
            $opinion = get_sub_field('opinion');
            $image = get_sub_field('imagen');     
            // Image variables.
            $url = $image['url'];
            $title = $image['title'];
            $alt = $image['alt'];
            // Thumbnail size attributes.
            $size = 'thumbnail';
            $thumb = $image['sizes'][ $size ];  
            ?>
            <div class="e-card --opinion opinioncard" data-aos="fade-up" data-aos-delay="300">
                <div class="frame-container">
                    <div class="frame-wrapper">
                        <div class="illustration"></div>
                        <div class="frame"> 
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" title="<?php echo esc_attr($title); ?>"> 
                        </div>
                    </div>
                </div>
                <h4 class="c-subtitle e-subtitle-4"> <?php echo $name; ?> </h4>
                <h4 class="e-job"> <?php echo $job; ?> </h4>
                <p class="e-text"> <?php echo $opinion ?> </p>
            </div>
            <?php
                endwhile;//child group field
            endif;
            ?>
            <?php
            if( have_rows('opinion_2') ): //child group field
                while( have_rows('opinion_2') ): the_row();                     
            // vars
            $name = get_sub_field('nombre');
            $job = get_sub_field('ocupacion_y_procedencia');
            $opinion = get_sub_field('opinion');
            $image = get_sub_field('imagen');     
            // Image variables.
            $url = $image['url'];
            $title = $image['title'];
            $alt = $image['alt'];
            // Thumbnail size attributes.
            $size = 'thumbnail';
            $thumb = $image['sizes'][ $size ];  
            ?>
            <div class="e-card --opinion opinioncard" data-aos="fade-up" data-aos-delay="450">
                <div class="frame-container">
                    <div class="frame-wrapper">
                        <div class="illustration"></div>
                        <div class="frame"> 
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" title="<?php echo esc_attr($title); ?>"> 
                        </div>
                    </div>
                </div>
                <h4 class="c-subtitle e-subtitle-4"> <?php echo $name; ?> </h4>
                <h4 class="e-job"> <?php echo $job; ?> </h4>
                <p class="e-text"> <?php echo $opinion ?> </p>
            </div>
            <?php
                endwhile;//child group field
            endif;
            ?>
            <?php
            if( have_rows('opinion_3') ): //child group field
                while( have_rows('opinion_3') ): the_row();                     
            // vars
            $name = get_sub_field('nombre');
            $job = get_sub_field('ocupacion_y_procedencia');
            $opinion = get_sub_field('opinion');
            $image = get_sub_field('imagen');     
            // Image variables.
            $url = $image['url'];
            $title = $image['title'];
            $alt = $image['alt'];
            // Thumbnail size attributes.
            $size = 'thumbnail';
            $thumb = $image['sizes'][ $size ];  
            ?>
            <div class="e-card --opinion opinioncard" data-aos="fade-up" data-aos-delay="600">
                <div class="frame-container">
                    <div class="frame-wrapper">
                        <div class="illustration"></div>
                        <div class="frame"> 
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" title="<?php echo esc_attr($title); ?>">
                        </div>
                    </div>
                </div>
                <h4 class="c-subtitle e-subtitle-4"> <?php echo $name; ?> </h4>
                <h4 class="e-job"> <?php echo $job; ?> </h4>
                <p class="e-text"> <?php echo $opinion ?> </p>
            </div>
            <?php
                endwhile;//child group field
            endif;
            ?>

    <?php
        endwhile;
    endif; //parent group field
    ?>
    </div>

</div><!--  CIERRA b-opinions -->