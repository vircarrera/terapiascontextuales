<?php get_header(); ?>

<!-- PÁGINA QUE MUESTRA LOS RESULTADOS DE LA BÚSQUEDA -->

<div class="c-search">
    <h1 class="e-title c-title">
        Has buscado:
        <?php
        $allsearch = new WP_Query("s=$s&showposts=-1");
        $key = wp_specialchars($s, 1);
        $count = $allsearch->post_count;
        _e('<span> ');
        echo $key;
        _e('</span>');
        _e(', hemos encontrado: ');
        _e('<span> ');
        echo $count;
        _e('</span>');
        wp_reset_query();
        ?>
    </h1>

    <div class="e-illustration">
        <div class="e-illustration-one"></div>
        <div class="e-illustration-two"></div>
        <div class="e-illustration-three"></div>
    </div>

    <div class="row-search-results">
        <?php
            $args = array(
            'post_status'            => array('publish'),
            'posts_per_page'         => 10,
            'mid_size'               => 1,
            'prev_next'              => true,
            'prev_text'              => __( '<i class="iconos ico-flecha-izq"></i>' ),
            'next_text'              => __( '<i class="iconos ico-flecha-der"></i>' ),
            );
            $search = new WP_Query($args);
        ?>
        <?php if ($search->have_posts()) : while ($search->have_posts()) : $search->the_post(); ?>
            
        <div class="b-card --search">    
            <div class="e-content">
                <h3 class="e-subtitle-3"><?php echo the_title(); ?></h3>
                <?php echo the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="cta cta-link">Ver más</a>
            </div>
        </div>

        <?php endwhile;?>

        <div class="b-pager">
            <div class="wrapper">
                <div class="e-numbers"><?php echo paginate_links($args); ?></div>
            </div>
        </div>
        <?php endif; ?>
    </div>

</div>

<?php get_footer(); ?>
