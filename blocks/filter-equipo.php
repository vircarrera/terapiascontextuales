<div class="b-filter">
    <div class="b-filter__wrapper">
        
        <div class="b-filter__list" data-content>

        <?php
        $terms = get_terms('person-role');
        if (!empty($terms) && !is_wp_error($terms)) {
            echo '<ul>';
            foreach ($terms as $term) {
        ?>
            <li><a href="<?php echo get_site_url(); ?>/roles/<?php echo $term->slug; ?>/#proyectos"><?php echo $term->name; ?></a></li>
        <?php
            }
            echo '</ul>';
        }
        ?>

        </div>
    </div>
</div>