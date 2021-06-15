<?php 
    $investigacionesRealizadas = get_field('investigaciones_realizadas'); 
    if ($investigacionesRealizadas) :           
?>
    <div class="related-researchs">
        <h2 class="c-subtitle e-subtitle-2">Investigaciones</h2>
        <div class="researchs-row">
        <?php foreach ($investigacionesRealizadas as $post):
            setup_postdata($post); 
        ?>
        <div class="b-card --research" data-aos="fade-up">
            <div class="research">
                <div class="e-content">
                    <h3 class="c-subtitle e-subtitle-3"><?php echo the_title(); ?></h3>
                    <?php echo the_excerpt(); ?>
                    <?php 
                        $paper = get_field('paper'); 
                        if ($paper) :
                    ?>
                        <a href="<?php echo $paper; ?>" class="cta cta-link">Ver poster</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <?php 
            wp_reset_postdata();
            endforeach;
        ?>
        </div>
    </div>
<?php
    endif;
?>