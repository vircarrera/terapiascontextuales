<div class="estudiodeprocesos">

    <div class="name_taxonomy">
        <?php
            $tax = 'thype-of-investigation';
            $terms = get_terms($tax, array(
            'orderby'    => 'name',
            'order'      => 'ASC',
            'hide_empty' => 0,
            'parent'   	 => 0,
            'term_taxonomy_id' => 220,
            ));
        ?>
        <h2 class="e-subtitle-2">
            <?php
                if ($terms) :
                    foreach ($terms as $term) : 
                        echo $term->name;
                    endforeach; 
                endif;
            ?>
        </h2>
    </div>

    <div class="loop_taxonomy">
    <?php 
        $args = array (
            'post_type' => 'investigacion',
            'post_per_page'=> -1,
            'tax_query' => array(
                array (
                    'taxonomy' => 'thype-of-investigation',
                    'field' => 'term_id',
                    'terms' => array(220),
                )
            )
        );

        $query = new WP_Query($args);

        while($query -> have_posts()) : $query -> the_post();

    ?>
        <div class="b-card --research" data-aos="fade-up">
            <div class="research" data-aos="fade-left">
                <div class="e-content">
                    <h3 class="e-subtitle-3"><?php echo the_title(); ?></h3>
                    <?php echo the_excerpt(); ?>
                    <?php 
                    $paper = get_field('paper'); 
                    if ($paper) :
                    ?>
                    <a href="<?php echo $paper; ?>" class="cta cta-link">Ver poster</a>
                    <?php endif;?>
                    <?php 
                    $dossier = get_field('dossier'); 
                    if ($dossier) :
                    ?>
                    <a href="<?php echo $dossier['url']; ?>" class="download-button"><i class="iconos ico-Descargar"></i> Descargar <?php echo $dossier["title"]?></a>
                    <?php endif;?>
                </div>
            </div>
            <div class="author" data-aos="fade-right">
                <?php 
                $autoria = get_field('autor'); 
                if ($autoria) :
                ?>
                    <?php foreach ($autoria as $post): ?>
                        <?php setup_postdata($post); ?>
                            <div class="b-card --team">
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
                                    <h3 class="e-subtitle-3"> <?php the_title(); ?></h3>
                                    <?php 
                                        if( have_rows('ficha_de_la_persona') ): //child group field
                                            while( have_rows('ficha_de_la_persona') ): the_row(); 
                                        // vars
                                        $occupation = get_sub_field('ocupacion');
                                    ?>
                                    <p class="e-text"> <?php echo $occupation ?> </p>
                                    <?php
                                            endwhile;
                                        endif;
                                    ?>
                                    <div class="cta-link-wrapper">
                                        <a href="<?php the_permalink(); ?>" class="cta cta-link">Ver perfil</a>                
                                    </div>  
                                </div>           
                            </div>
                        <?php wp_reset_postdata();?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div> 
    <?php 
        endwhile; 
    ?>
    </div>
</div>