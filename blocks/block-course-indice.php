<?php 
    if( have_rows('indice_de_contenido') ): //parent group field
        while( have_rows('indice_de_contenido') ): the_row(); 
?>
  
    <div class="b-indice" data-aos="fade-up">
        <?php 
            $indicecontenido = get_field('indice_de_contenido');
            if ($indicecontenido) :
        ?>
            <div class="totallections">
                <?php echo $indicecontenido['total_de_lecciones_+_tiempo']; ?>
                <label for="checkindice" class="e-indice__arrow">
                    <i class="iconos ico-flecha-der"></i>
                </label>
            </div>
        <?php endif; ?>

        <?php if( have_rows('leccion_1') ): //child group field
            while( have_rows('leccion_1') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
            if($precioactual):
        ?>
            <div class="lection one 1">
                <i class="iconos ico-candado-abierto"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php endif;
            endwhile; 
            endif;  // close child group field 
            if( have_rows('leccion_2') ): // open child group field
            while( have_rows('leccion_2') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
            if($precioactual):
        ?>
            <div class="lection 2">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php endif;
            endwhile; 
            endif; // close child group field 
            if( have_rows('leccion_3') ): // open child group field
            while( have_rows('leccion_3') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
            if($precioactual):
        ?>
            <div class="lection 3">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php endif;
            endwhile; 
            endif; // close child group field -->
            if( have_rows('leccion_4') ): // open child group field
            while( have_rows('leccion_4') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
            if($precioactual):
        ?>
            <div class="lection 4">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php endif;
            endwhile; 
            endif;  // close child group field 
            if( have_rows('leccion_5') ): // open child group field
            while( have_rows('leccion_5') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
            if($precioactual):
        ?>
            <div class="lection 5">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php endif;
            endwhile;
            endif; // close child group field
            if( have_rows('leccion_6') ): // open child group field
            while( have_rows('leccion_6') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
            if($precioactual):
        ?>
            <div class="lection 6">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php endif;
            endwhile; 
            endif;  // close child group field 
            if( have_rows('leccion_7') ): // open child group field
            while( have_rows('leccion_7') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
            if($precioactual):
        ?>
            <div class="lection 7">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php endif;
            endwhile; 
            endif;  // close child group field 
            if( have_rows('leccion_8') ): // open child group field
            while( have_rows('leccion_8') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
            if($precioactual):
        ?>
            <div class="lection 8">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php endif;
            endwhile; 
            endif;  // close child group field 
            if( have_rows('leccion_9') ): // open child group field
            while( have_rows('leccion_9') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
            if($precioactual):
        ?>
            <div class="lection 9">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php endif;
            endwhile; 
            endif;  // close child group field
            if( have_rows('leccion_10') ): // open child group field
            while( have_rows('leccion_10') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
            if($precioactual):
            ?>
            <div class="lection 10">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php 
            endif;
            endwhile; 
            endif;  // close child group field
            if( have_rows('leccion_11') ): // open child group field
            while( have_rows('leccion_11') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
                if($precioactual):
        ?>
            <div class="lection 11">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php endif;
            endwhile; 
            endif;  // close child group field
            if( have_rows('leccion_12') ): // open child group field
            while( have_rows('leccion_12') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
                if($precioactual):
        ?>
            <div class="lection 12">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php
                endif;
            endwhile; 
            endif;  // close child group field 
            if( have_rows('leccion_13') ): // open child group field
            while( have_rows('leccion_13') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
                if($precioactual):
        ?>
            <div class="lection 13">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php
                endif;
            endwhile; 
            endif;  // close child group field 
            if( have_rows('leccion_14') ): // open child group field
            while( have_rows('leccion_14') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
                if($precioactual):
        ?>
            <div class="lection 14">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php
                endif;
            endwhile; 
            endif;  // close child group field 
            if( have_rows('leccion_15') ): // open child group field
            while( have_rows('leccion_15') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
                if($precioactual):
        ?>
            <div class="lection 15">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php
                endif;
            endwhile; 
            endif;  // close child group field 
            if( have_rows('leccion_16') ): // open child group field
            while( have_rows('leccion_16') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
                if($precioactual):
        ?>
            <div class="lection 16">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php
                endif;
            endwhile; 
            endif;  // close child group field 
            if( have_rows('leccion_17') ): // open child group field
            while( have_rows('leccion_17') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
                if($precioactual):
        ?>
            <div class="lection 17">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php
                endif;
            endwhile; 
            endif;  // close child group field 
            if( have_rows('leccion_18') ): // open child group field
            while( have_rows('leccion_18') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
                if($precioactual):
        ?>
            <div class="lection 18">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php
                endif;
            endwhile; 
            endif;  // close child group field 
            if( have_rows('leccion_19') ): // open child group field
            while( have_rows('leccion_19') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
                if($precioactual):
        ?>
            <div class="lection 19">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php
                endif;
            endwhile; 
            endif;  // close child group field 
            if( have_rows('leccion_20') ): // open child group field
            while( have_rows('leccion_20') ): the_row(); 
            // vars
            $precioactual = get_sub_field('orden_y_titulo');
            $porcentajedescuento = get_sub_field('duracion');
                if($precioactual):
        ?>
            <div class="lection 20">
                <i class="iconos ico-candado-cerrado"></i>
                <span class="title"><?php echo $precioactual; ?></span>
                <span class="time"><?php echo $porcentajedescuento; ?></span>
            </div>
        <?php
                endif;
            endwhile; 
            endif;  // close child group field 
        ?>
    </div>
<?php 
    endwhile;  
endif; 
?> <!-- close parent group field -->