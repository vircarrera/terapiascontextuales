<?php get_header(); ?>

<!-- empieza el LOOP -->
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <?php 
        /* variables para cada imagen */
            $full = get_the_post_thumbnail_url(get_the_ID(),'full'); 
            $large = get_the_post_thumbnail_url(get_the_ID(),'large');
            $thumbnail = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); 
            $medium = get_the_post_thumbnail_url(get_the_ID(),'medium'); 
        ?>

        <div class="content">

            <div class="b-opening">
                <picture class="e-photo">
                    <source media="(min-width: 992px)" srcset="<?php echo esc_url($large); ?>">
                    <img src="<?php echo esc_url($medium); ?>" alt="">
                </picture>
                <div class="info-wrapper">
                    <div class="bg-white">
                        <h1 class="e-title"><?php the_title(); ?></h1>
                    </div>

                    <div class="name-time">
                        <?php $autor = get_field('autor_para_listado');
                        if($autor) :
                        ?>
                            <a href="<?php echo $autor["url"]; ?>"><h3 class="e-author">
                            Por <span> <?php echo $autor["title"]; ?> |</span></a>
                            </h3>
                        <?php endif;?>
                        <?php 
                        $min = get_field('minutos_de_lectura');
                        if($min) :
                        ?> 
                            <spam class="e-time"><?php echo $min; ?></spam>   
                        <?php endif;?>
                        
                    </div>
                </div>
            </div> <!-- cierra b-opening -->

            <div class="c-content b-article">

                <p class="e-date"> <?php echo get_the_date();?> </p>
                <div class="e-text" data-aos="fade-up"> <?php the_content(); ?> </div>
            
            </div>

            <aside class="c-aside -blog" data-aos="fade-left">
                <div class="e-tags">
                    <h4 class="c-subtitle e-subtitle-4">ÁREAS</h4>
                    <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
                </div>
                <!-- <hr>
                <div class="newsletter">
                    <div class="contact__form">
                    </div>
                </div> -->
            
            </aside>
                
            <?php get_template_part( 'blocks/single-related-course' ); ?> <!-- llamada al bloque cursos relacionados -->  

            <?php get_template_part( 'blocks/related-posts' ); ?> <!-- llamada al bloque cursos relacionados -->   
            

            
 
        
        </div>
    <?php endwhile;
endif; ?>
<!-- termina el LOOP -->
 
<?php get_footer(); ?>

