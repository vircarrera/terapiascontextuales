<div class="b-card">
    <h2>ESTO ES UN BLOCK</h2>
    <!-- empieza el LOOP -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="b-card --team" style="border: 3px solid red;">
                    <a href="<?php the_permalink(); ?>">
                        <div class="e-figure">
                            <picture class="figure">
                                <source media="(min-width: 1200px)" srcset="<?php echo esc_url($large); ?>">
                                <source media="(min-width: 768px)" srcset="<?php echo esc_url($medium); ?>">
                                <img src="<?php echo esc_url($thumbnail); ?>" alt="">
                            </picture>
                        </div>

                        <div class="e-content">
                            <h4 class="e-name"><?php echo the_title(); ?></h4>
                            <p class="e-bio"><?php echo the_excerpt(); ?></p>
                            <a class="cta cta-link" href="<?php the_permalink(); ?>">Ver más</a>
                        </div>
                    </a>
                </div>

    <?php endwhile; endif; ?>

        <!-- termina el LOOP -->
</div><!-- cierra e-cards -->