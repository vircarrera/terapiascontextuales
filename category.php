<?php get_header(); ?>

<div class="content cat">

    <div class="title__wrapper">
        <h1 class="e-title">
            <?php single_cat_title(); ?>
        </h1>
    </div>

    <input type="checkbox" id="checkfilter">
    <div class="c-aside --entries">
        <h5 class="c-subtitle e-subtitle-4">
            <label for="checkfilter" class="e-checkfilter__label">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/content/mas.svg"></img>
            </label>
            Filtros de Búsqueda
        </h5>
        <div class="e-content">
            <?php get_template_part( 'blocks/block-filter-posts' ); ?><!-- filtro posts -->
            <ul>
                <li class="e-filters">
                    <a class="cta cta-link" href="<?php echo get_site_url(); ?>/blog"><i class="iconos ico-flecha-izq"></i> Volver a todas</a>
                </li>
            </ul>
        </div>

    </div>

    <div class="c-content c-entries results__category"> 
    
        <?php
            $args = array(
            'post_type'              => array('post'),
            'post_status'            => array('publish'),
            );
            $posts = new WP_Query($args);
            if ($posts->have_posts()) :
            ?>

                <?php while ($posts->have_posts()) :
                    $posts->the_post();
                ?>
                    <?php
                    /* variables para cada imagen */
                    $full = get_the_post_thumbnail_url(get_the_ID(),'full');
                    $large = get_the_post_thumbnail_url(get_the_ID(),'large');
                    $thumbnail = get_the_post_thumbnail_url(get_the_ID(),'thumbnail');
                    $medium = get_the_post_thumbnail_url(get_the_ID(),'medium');
                    ?>

                        <div class="b-card --blog" data-aos="fade-up">    
                            <div class="e-card-heading">
                                <figure class="figure">
                                    <source media="(min-width: 1200px)" srcset="<?php echo esc_url($large); ?>">
                                    <source media="(min-width: 768px)" srcset="<?php echo esc_url($medium); ?>">
                                    <img src="<?php echo esc_url($thumbnail); ?>" alt="">
                                </figure>
                                
                                <div class="e-title-author-min">
                                    <a href=" <?php the_permalink()?>">
                                        <h3 class="e-subtitle-3"><?php the_title();?></h3>
                                    </a>
                                    <h4 class="e-card-subtitle-4">
                                        <?php
                                        $min = get_field('minutos_de_lectura');
                                        $autor = get_field ('autor_para_listado');
                                        if($autor) :
                                        ?>
                                            <a href="<?php echo $autor['url'];?>"><?php echo $autor['title'];?></a>
                                    </h4>
                                    <?php 
                                        endif;
                                    if($min):                           ?>
                                        <spam class="e-card-text">| <?php echo $min; ?></spam>

                                    <?php endif;?>
                                    
                                </div>
                            </div>

                            <div class="e-content">
                                <div class="e-wrapper">
                                    <p class="e-date"><?php echo get_the_date(); ?></p>
                                    <div class="e-card-text"> <?php the_excerpt(); ?> </div>
                                </div>
                                <div class="e-tags"> <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?> </div>
                                <a href="<?php the_permalink(); ?>" class="cta cta-link">Ver más</a>
                            </div>
                        </div>
                    
                <?php endwhile; ?>
            
            <?php endif;?>

            
            <div class="b-pager">
                <div class="e-previous"><?php previous_posts_link('<span class="icon-flecha"></span>'); ?></div>
                <div class="e-numbers"><?php echo paginate_links($args); ?></div>
                <div class="next"><?php next_posts_link('<span class="icon-flecha"></span>'); ?></div>
            </div>

        </div>       

    </div><!-- .aprender -->

</div>



<?php get_footer(); ?>
