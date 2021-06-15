<div class="b-university">

    <?php 
    if( have_rows('entidades_que_participan') ): 
        while( have_rows('entidades_que_participan') ): the_row(); 

        $titulo = get_sub_field('titulo');
        $logo = get_sub_field('logo');
        $logo2 = get_sub_field('logo_2');
        $logo3 = get_sub_field('logo_3');
        $logo4 = get_sub_field('logo_4');
        $logo5 = get_sub_field('logo_5');
        $logo6 = get_sub_field('logo_6');
        $logo7 = get_sub_field('logo_7');
        $logo8 = get_sub_field('logo_8');
        $logo9 = get_sub_field('logo_9');
        $logo10 = get_sub_field('logo_10');
        $logo11 = get_sub_field('logo_11');
        $logo12 = get_sub_field('logo_12');

        // Image variables logo
        $url = $logo['url'];
        $title = $logo['title'];
        $alt = $logo['alt'];

        // Thumbnail size attributes logo
        $size = 'thumbnail';
        $thumb = $logo['sizes'][ $size ];

        // Image variables logo2
        $url2 = $logo2['url'];
        $title2 = $logo2['title'];
        $alt2 = $logo2['alt'];

        // Thumbnail size attributes logo2
        $size2 = 'thumbnail';
        $thumb2 = $logo2['sizes'][ $size ];

        // Image variables logo3
        $url3 = $logo3['url'];
        $title3 = $logo3['title'];
        $alt3 = $logo3['alt'];

        // Thumbnail size attributes logo3
        $size3 = 'thumbnail';
        $thumb3 = $logo3['sizes'][ $size ];

        // Image variables logo4
        $url4 = $logo4['url'];
        $title4 = $logo4['title'];
        $alt4 = $logo4['alt'];

        // Thumbnail size attributes logo4
        $size4 = 'thumbnail';
        $thumb4 = $logo4['sizes'][ $size ];

        // Image variables logo5
        $url5 = $logo5['url'];
        $title5 = $logo5['title'];
        $alt5 = $logo5['alt'];

        // Thumbnail size attributes logo5
        $size5 = 'thumbnail';
        $thumb5 = $logo5['sizes'][ $size ];

        // Image variables logo6
        $url6 = $logo6['url'];
        $title6 = $logo6['title'];
        $alt6 = $logo6['alt'];

        // Thumbnail size attributes logo6
        $size6 = 'thumbnail';
        $thumb6 = $logo6['sizes'][ $size ];

        // Image variables logo7
        $url7 = $logo7['url'];
        $title7 = $logo7['title'];
        $alt7 = $logo7['alt'];

        // Thumbnail size attributes logo7
        $size7 = 'thumbnail';
        $thumb7 = $logo7['sizes'][ $size ];

        // Image variables logo8
        $url8 = $logo8['url'];
        $title8 = $logo8['title'];
        $alt8 = $logo8['alt'];

        // Thumbnail size attributes logo8
        $size8 = 'thumbnail';
        $thumb8 = $logo8['sizes'][ $size ];

        // Image variables logo9
        $url9 = $logo9['url'];
        $title9 = $logo9['title'];
        $alt9 = $logo9['alt'];

        // Thumbnail size attributes logo9
        $size9 = 'thumbnail';
        $thumb9 = $logo9['sizes'][ $size ];

        // Image variables logo10
        $url10 = $logo10['url'];
        $title10 = $logo10['title'];
        $alt10 = $logo10['alt'];

        // Thumbnail size attributes logo10
        $size10 = 'thumbnail';
        $thumb10 = $logo10['sizes'][ $size ];

        // Image variables logo11
        $url11 = $logo11['url'];
        $title11 = $logo11['title'];
        $alt11 = $logo11['alt'];

        // Thumbnail size attributes logo11
        $size11 = 'thumbnail';
        $thumb11 = $logo11['sizes'][ $size ];

        // Image variables logo12
        $url12 = $logo12['url'];
        $title12 = $logo12['title'];
        $alt12 = $logo12['alt'];

        // Thumbnail size attributes logo12
        $size12 = 'thumbnail';
        $thumb12 = $logo12['sizes'][ $size ];

    ?>

        <h2 class="c-title e-subtitle-2"> <?php echo $titulo; ?> </h2>
        <div class="e-university">
            <?php 
            if ( $logo) :  ?> 
                <div class="e-icon">
                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" title="<?php echo esc_attr($title); ?>">
                </div>
            <?php endif ?>
            <?php if ($logo2) :  ?> 
                <div class="e-icon">
                    <img src="<?php echo esc_url($thumb2); ?>" alt="<?php echo esc_attr($alt2); ?>" title="<?php echo esc_attr($title2); ?>">
                </div>
            <?php endif ?>
            <?php if ($logo3) :  ?> 
                <div class="e-icon">
                    <img src="<?php echo esc_url($thumb3); ?>" alt="<?php echo esc_attr($alt3); ?>" title="<?php echo esc_attr($title3); ?>">
                </div>
            <?php endif ?>
            <?php if ($logo4) :  ?> 
                <div class="e-icon">
                    <img src="<?php echo esc_url($thumb4); ?>" alt="<?php echo esc_attr($alt4); ?>" title="<?php echo esc_attr($title4); ?>">
                </div>
            <?php endif ?>
            <?php if ($logo5) :  ?> 
                <div class="e-icon">
                    <img src="<?php echo esc_url($thumb5); ?>" alt="<?php echo esc_attr($alt5); ?>" title="<?php echo esc_attr($title5); ?>">
                </div>
            <?php endif ?>
            <?php if ($logo6) :  ?> 
                <div class="e-icon">
                    <img src="<?php echo esc_url($thumb6); ?>" alt="<?php echo esc_attr($alt6); ?>" title="<?php echo esc_attr($title6); ?>">
                </div>
            <?php endif ?>
            <?php if ($logo7) :  ?>  
                <div class="e-icon">
                    <img src="<?php echo esc_url($thumb7); ?>" alt="<?php echo esc_attr($alt7); ?>" title="<?php echo esc_attr($title7); ?>">
                </div>
            <?php endif ?>
            <?php if ($logo8) :  ?>  
                <div class="e-icon">
                    <img src="<?php echo esc_url($thumb8); ?>" alt="<?php echo esc_attr($alt8); ?>" title="<?php echo esc_attr($title8); ?>">
                </div>
            <?php endif ?>
            <?php if ($logo9) :  ?>  
                <div class="e-icon">
                    <img src="<?php echo esc_url($thumb9); ?>" alt="<?php echo esc_attr($alt9); ?>" title="<?php echo esc_attr($title9); ?>">
                </div>
            <?php endif ?>
            <?php if ($logo10) :  ?>     
                <div class="e-icon">
                    <img src="<?php echo esc_url($thumb10); ?>" alt="<?php echo esc_attr($alt10); ?>" title="<?php echo esc_attr($title10); ?>">
                </div>
            <?php endif ?>
            <?php if ($logo11) :  ?> 
                <div class="e-icon">
                    <img src="<?php echo esc_url($thumb11); ?>" alt="<?php echo esc_attr($alt11); ?>" title="<?php echo esc_attr($title11); ?>">
                </div>
            <?php endif ?>
            <?php if ($logo12) :  ?> 
                <div class="e-icon">
                    <img src="<?php echo esc_url($thumb12); ?>" alt="<?php echo esc_attr($alt12); ?>" title="<?php echo esc_attr($title12); ?>">
                </div>
            <?php endif ?>
        </div><!-- CIERRA b-university-logos -->

    <?php
        endwhile;
    endif;
    ?>

</div> <!-- CIERRA c-university -->