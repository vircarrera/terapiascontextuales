<?php /* Template Name: Investigaciones */ ?>

<?php get_header(); ?>

<div class="content investigaciones">
	
    <?php 
        // vars
        $titulo = get_field('titulo');
        $texto = get_field('texto');
    ?>
    <?php if ($titulo) : ?>
        <h1 class="e-title"><?php echo $titulo ?></h1>  
    <?php endif; ?>
    <?php if ($texto) : ?>
        <p class="e-text"><?php echo $texto ?></p>
    <?php endif; ?>
    <?php get_template_part( 'blocks/block-university-logos' ); ?><!-- ENTIDADES QUE PARTICIPAN -->
    <?php get_template_part( 'blocks/block-filter-investigacion-estudiodecaso' ); ?><!-- filtro + loop-->
    <?php get_template_part( 'blocks/block-filter-investigacion-estudiodeprocesos' ); ?><!-- filtro + loop -->

    <section class="b-our-courses">
        <?php
        if( have_rows('seleccion_de_cursos') ): //parent group field
            while( have_rows('seleccion_de_cursos') ): the_row(); 

        // vars
        $title = get_sub_field('titulo_del_bloque');
        $subtitle = get_sub_field('subtitulo_del_bloque');   
        $boton = get_sub_field('boton');
        ?>
            <h2 class="c-title e-subtitle-2"> <?php echo $title ?> </h2>
            <h3 class="c-subtitle e-subtitle-3" data-aos="fade-up"> <?php echo $subtitle ?> </h3>
            <div class="e-our-courses">
                <?php get_template_part( 'blocks/selection-courses' ); ?>
            </div>
            <div class="wrapper"><a class="cta cta-link e-subtitle-2"  data-aos="fade-up" href="<?php echo $boton['url'];?>"><?php echo $boton['title']; ?> <i class="iconos ico-flecha-der"></i></a></div>    
        <?php
            endwhile;
        endif;
        ?>
    </section> <!-- termina b-our-courses-->

</div>

<?php get_footer(); ?>