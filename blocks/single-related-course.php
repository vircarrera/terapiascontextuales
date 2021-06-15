<?php 
$course = get_field('curso_relacionado'); 
if ($course) :     
?>
<div class="b-course-related">
    <h2 class="e-subtitle-2 c-subtitle">Formación relacionada</h2>
    <?php foreach ($course as $post):
        setup_postdata($post); 
    ?>
        <div class="b-card --course featured" data-aos="fade-up">
            <a href="<?php the_permalink(); ?>">
                <figure class="figure">
                    <?php 
                        /* variables para cada imagen */
                        $full = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                        $large = get_the_post_thumbnail_url(get_the_ID(),'large');
                        $thumbnail = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); 
                        $medium = get_the_post_thumbnail_url(get_the_ID(),'medium'); 
                    ?>
                    <source media="(min-width: 1200px)" srcset="<?php echo esc_url($large); ?>">
                    <source media="(min-width: 768px)" srcset="<?php echo esc_url($medium); ?>">
                    <img src="<?php echo esc_url($thumbnail); ?>" alt="">
                </figure>
            </a>
            <div class="e-content">
                <div class="e-wrapper">
                    <a href="<?php the_permalink(); ?>"><h3 class="e-subtitle-3"><?php the_title(); ?></h3></a>
                    <h4 class="e-card-subtitle-4">
                        <span>Por </span>
                        <?php $docenteListado = get_field('docente_para_listado'); 
                            if ($docenteListado) :
                        ?>
                        <a href="<?php echo $docenteListado['url'];?>"><?php echo $docenteListado['title'];?></a>
                        <?php endif; ?>
                    </h4>
                    <p class="e-card-text"> 
                        <?php $claim = get_field('claim');
                        if ($claim) : ?>
                        <span><?php echo $claim; ?></span>
                        <?php endif;?> 
                        <span> <?php the_excerpt(); ?> </span>
                    </p>
                </div>
                <div class="e-card-price">
                    <?php 
                    if( have_rows('precio') ): //parent group field
                        while( have_rows('precio') ): the_row(); 
                    ?>  
                        <div class="discount-old">
                            <?php 
                            if( have_rows('precio_en_euros') ): //child group field
                                while( have_rows('precio_en_euros') ): the_row(); 
                                // vars
                                $porcentajedescuento = get_sub_field('porcentaje_descuento');
                            ?>
                            <span class="descuento"><?php echo $porcentajedescuento; ?></span>   
                            <?php 
                                endwhile;
                            endif; ?>              
                            
                            <?php 
                            if( have_rows('precio_en_euros') ): //child group field
                                while( have_rows('precio_en_euros') ): the_row(); 
                                // vars
                                $precioantesrebaja = get_sub_field('precio_antes_de_la_rebaja');
                            ?>
                                <span class="euro-price-old"><?php echo $precioantesrebaja; ?></span>   
                            <?php 
                                endwhile;
                            endif; ?>
                            <?php 
                            if( have_rows('precio_en_usd') ): //child group field
                                while( have_rows('precio_en_usd') ): the_row(); 
                                // vars
                                $precioantesrebaja = get_sub_field('precio_antes_de_la_rebaja');
                            ?>
                                <span class="euro-price-old"><?php echo $precioantesrebaja; ?></span>   
                            <?php 
                                endwhile;
                            endif; ?>
                        </div>
                        <a class="price-new cta cta-button" href="<?php the_permalink(); ?>" >
                            <?php 
                            if( have_rows('precio_en_euros') ): //child group field
                                while( have_rows('precio_en_euros') ): the_row(); 
                                // vars
                                $precioactual = get_sub_field('precio_actual');
                            ?>
                                <span class="euro-price-new"><?php echo $precioactual; ?></span> 
                            <?php 
                                endwhile;
                            endif; ?>
                            <?php 
                            if( have_rows('precio_en_usd') ): //child group field
                                while( have_rows('precio_en_usd') ): the_row(); 
                                // vars
                                $precioactual = get_sub_field('precio_actual');
                            ?>
                                <span class="usd-price-new"><?php echo $precioactual; ?></span>   
                            <?php 
                                endwhile;
                            endif; ?>
                        </a>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div> <!-- termina e-price -->
            </div>
        </div>  <!-- cierra --course featured -->
    <?php 
        wp_reset_postdata();
    endforeach;  
    ?>
</div>
<?php 
endif;
?>