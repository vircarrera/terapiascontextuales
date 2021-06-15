</div><!-- .container -->

<footer class="c-footer">

    <div class="bg-darker">

        <div class="container w-1310">

            <div class="b-mapsite">
                <div class="e-subtitle-4">
                    Nuestros cursos
                </div>
                <?php get_template_part('blocks/list-courses'); ?>
            </div>

            <div class="b-social">
                <!-- <div class="b-newsletter">
                    <div class="e-subtitle-4">
                        Suscríbete a nuestra newsletter
                    </div>
                    <div class="newsletter">
                        <div class="contact__form">
                        </div>
                    </div>
                </div> -->
                <div class="b-follow">
                    <div class="e-subtitle-4">
                        Síguenos
                    </div>
                    <?php 
                        wp_nav_menu( array( 
                            'theme_location' => 'menuredes', 
                            'container' => 'false', 
                            'menu_class'=>'e-menu__redes') 
                        ); 
                    ?>
                </div>
            </div>

        </div>  
          
    </div>

    <div class="bg-darkest">  
        
        <div class="container w-1310">
            <div class="b-menubottom">
                <?php 
                    wp_nav_menu( array( 
                        'theme_location' => 'menutop', 
                        'container' => 'false', 
                        'menu_class'=>'e-menu__bottom') 
                    ); 
                ?>
                <?php 
                    wp_nav_menu( array( 
                        'theme_location' => 'menulegal', 
                        'container' => 'false', 
                        'menu_class'=>'e-menu__legal') 
                    ); 
                ?>
            </div>

            <?php if ( function_exists( 'display_copyright' ) ) display_copyright(); ?>
            <div class="credits"><a href="/index.php?page_id=1055">Créditos</a></div>
        </div>
        
    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
