<?php
/* variables para cada imagen */
$full = get_the_post_thumbnail_url(get_the_ID(),'full');
$large = get_the_post_thumbnail_url(get_the_ID(),'large');
$thumbnail = get_the_post_thumbnail_url(get_the_ID(),'thumbnail');
$medium = get_the_post_thumbnail_url(get_the_ID(),'medium');
?>


<div class="b-little-card" data-aos="fade-up">  
  
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
</div>