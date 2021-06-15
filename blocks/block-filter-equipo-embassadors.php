<div class="b-embassadors-row">

    <div class="name_taxonomy e-subtitle-3">
        <?php
            $tax = 'person-role';
            $terms = get_terms($tax, array(
            'orderby'    => 'name',
            'order'      => 'ASC',
            'hide_empty' => 0,
            'parent'   	 => 0,
            'term_taxonomy_id' => 175,
            ));
        ?>
        <h3>
            <?php
                if ($terms) :
                    foreach ($terms as $term) : 
                        echo $term->name;
                    endforeach; 
                endif;
            ?>
        </h3>
    </div>

    <div class="loop_taxonomy">
        <?php 
            $args = array (
                'post_type' => 'persona',
                'post_per_page'=> -1,
                'tax_query' => array(
                    array (
                        'taxonomy' => 'person-role',
                        'field' => 'term_id',
                        'terms' => array(175),
                    )
                )
            );
            $query = new WP_Query($args);
            while($query -> have_posts()) : $query -> the_post();
        ?>
        <div class="b-card --team" data-aos="fade-up">
            <?php 
                /* variables para cada imagen */
                $full = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                $large = get_the_post_thumbnail_url(get_the_ID(),'large');
                $thumbnail = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); 
                $medium = get_the_post_thumbnail_url(get_the_ID(),'medium'); 
            ?>
            <div class="frame-container">
                <div class="frame">
                    <picture class="e-image">
                        <source media="(min-width: 768px)" srcset="<?php echo esc_url($medium); ?>">
                        <img src="<?php echo esc_url($thumbnail); ?>" alt="">
                    </picture>
                </div>
            </div>
            <div class="e-content">
                <h4 class="e-subtitle-4"> <?php the_title(); ?></h4>
                <?php 
                    if( have_rows('ficha_de_la_persona') ): //child group field
                        while( have_rows('ficha_de_la_persona') ): the_row(); 
                    // vars
                    $occupation = get_sub_field('ocupacion');
                ?>
                <p class="e-card-text "> <?php echo $occupation ?> </p>
                <?php
                        endwhile;
                    endif;
                ?>
                <div class="cta-link-wrapper">   
                    <a href="<?php the_permalink(); ?>" class="cta cta-link">Ver perfil</a> 
                </div> 
            </div>

        </div>
        <?php 
            endwhile; 
        ?>

    </div>
    
</div>