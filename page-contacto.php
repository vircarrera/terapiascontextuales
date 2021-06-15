<?php /* Template Name: Contacto */ ?>
<?php get_header(); ?>

<div class="contacto">

<div class="row justify-content-center">
<!-- empieza el LOOP -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="col-md-8 col-lg-7 col-xl-6">

        <h1 class="contacto__titulo">
        <?php the_title(); ?>
        </h1>

        <div class="contacto__imagen">
            <img src="<?php bloginfo( 'template_url' ); ?>/img/intro-contacto.svg">
        </div>

        <?php echo do_shortcode('[contact-form-7 id="58" title="Contacto general"]') ?>

        <div class="contacto__datos">
        <?php the_content(); ?>
        </div>

    </div>

<?php endwhile; endif; ?>
<!-- termina el LOOP -->
</div>


</div>

<?php get_footer(); ?>