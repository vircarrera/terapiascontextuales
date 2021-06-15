<div class="b-links" >
    <?php
        $args = array(
            'post_type'              => array('curso'),
            'post_status'            => array('publish'),
        );
        $posts = new WP_Query($args);

    if ($posts->have_posts()) :
        $i = 0;
    ?>

        <?php while ($posts->have_posts()) : $posts->the_post(); ?>
            <a href="<?php the_permalink(); ?>">
                <h4 class="e-subtitle-4"><?php the_title(); ?></h4>
            </a>   
        <?php endwhile;
    endif; ?>

</div>