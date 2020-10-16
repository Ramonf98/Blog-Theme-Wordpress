<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Oswald&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilos.css">
    <title>
        <?php if( is_home() ){
            echo get_bloginfo('name');
        } else if( is_single()){
            echo the_title();
        } else{
            echo get_bloginfo('name');
        } ?>
    </title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="row d-flex align-items-center ">
                <div class="col-12 col-md-6 logo">
                    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/Logotipo RC2.png" alt="Logo"></a>
                </div>
                <div class="redes-sociales col-12 col-md-6">
                    <a class="github" href="#"><i class="fab fa-github"></i></a>
                    <a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
                    <a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <nav class="menu">
            <div class="container">
                <div class="row">
                    <?php wp_nav_menu(array(
                        'container'     =>  false,
                        'menu_class'    =>  '',
                        'item_wrap'     =>  '<ul class="col-md-12">%3$s</ul>',
                        'theme_location' => 'menu-top'
                    )); ?>
                </div>
            </div>
        </nav>

        <div class="ad container">
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php bloginfo('template_url'); ?>/img/ad.jpg" alt="publicidad">
                </div>
            </div>
        </div>

        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Header') ): endif; ?>
    </header>