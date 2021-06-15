<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel='preload' href="<?php bloginfo( 'template_url' ); ?>/fonts/terapiascontextuales.woff?23ye0b" as="font" type="font/woff" crossorigin="anonymous">
<meta name="google-site-verification" content="evSYaN5PnSO9QoQZGPz4nv7EXlIh3N6IkLubNdHp3DE" />
</head>
<body <?php body_class(); ?> >

<header class="c-header">    
    <?php 
        $cabeceraCuentaAtras = get_field('banner-promociones-cabecera-cuenta-atras');
        $cabeceraEnlace = get_field('banner-promociones-cabecera-enlace');
        $cabeceraEnlaceTexto = $cabeceraEnlace['title'];
        $cabeceraEnlaceLink = $cabeceraEnlace['url'];
        if($cabeceraCuentaAtras && $cabeceraEnlace) :
    ?>
        <a class="b-banner" href="<?php echo $cabeceraEnlaceLink; ?>">
            <span class="e-text"> <?php echo $cabeceraEnlaceTexto; ?></span>
            <span class="e-countdown"> <?php echo $cabeceraCuentaAtras; ?></span>
        </a>

    <?php endif;?>

    <div class="container w-1310">
        
        <input type="checkbox" id="check" class="e-check">
        <a href="<?php echo home_url(); ?>" class="e-logo__link">
            <img src="<?php bloginfo( 'template_url' ); ?>/img/content/logo.png" class="e-logo positive">
            <img src="<?php bloginfo( 'template_url' ); ?>/img/content/logo-negativo.png" class="e-logo negative">
            <img src="<?php bloginfo( 'template_url' ); ?>/img/content/isotipo.png" class="e-logo isotype-positive">
            <img src="<?php bloginfo( 'template_url' ); ?>/img/content/isotipo-negativo.png" class="e-logo isotype-negative">
        </a>
        <label for="check" class="e-burger">
            <div class="e-burger-container">
                <img class="dark" src="<?php bloginfo( 'template_url' ); ?>/img/content/mas-menu.svg">
                <img class="light" src="<?php bloginfo( 'template_url' ); ?>/img/content/mas-blanco.svg">
            </div>
        </label>
        <div class="navcontainer">
            <nav class="e-nav --top">        
                <?php wp_nav_menu( array( 
                    'theme_location' => 'menutop', 
                    'container' => 'false', 
                    'menu_class'=>'e-menu --top') 
                    ); 
                ?>
                <div class="e-search">
                    <?php the_widget( 'WP_Widget_Search' ); /* buscador */ ?>   
                </div>
            </nav>
            <div class="e-nav --redes">
                <?php wp_nav_menu( array( 
                    'theme_location' => 'menuredes', 
                    'container' => 'false', 
                    'menu_class'=>'e-menu --redes') 
                    ); 
                ?>
            </div>
        </div>
    </div> <!-- cierra container w-1310 -->

</header>

<div class="container --main <?php if(!is_front_page()): echo "w-1310"; endif; ?>">