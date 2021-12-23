<?php

//Cuando el tema es activado
function gymthemes_setup(){

    /**Esto permitira agregar la imagen destacada de cada pagina */
    add_theme_support( 'post-thumbnails' );

    /* Esto nos genera las dimensiones de las imagenes*/
    add_image_size( 'square', 350, 350, true);
    add_image_size( 'portrait', 350, 724, true);
    add_image_size( 'cajas', 400, 370, true);
    add_image_size( 'mediano', 700, 400, true);
    add_image_size( 'grande', 966, 644, true);
}

add_action( 'after_setup_theme', 'gymthemes_setup');
// Menus de navegacion
function gymfitness_menus(){
    register_nav_menus( array(
        'menu-principal' => __( 'Menu Principal', 'gymfitness'),
        'menu-footer' => __( 'Menu Footer', 'gymfitness')
    ));
}
//Hook para anadir el menu de wordpress
add_action( 'init', 'gymfitness_menus' );

// Scripts y Styles
function gymfitness_scripts_style(){
//CARGANDO ARCHIVOS CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css' , array(), '8.0.1');
    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css' , array(), '1.0.0');
    wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Raleway:wght@200;300&family=Staatliches&display=swap', array(), '1.0.0');

    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'slicknavCSS', 'googleFonts'), '1.0.0');

//CARGANDO ARCHIVOS JS
wp_enqueue_script( 'slickvacJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array( 'jquery' ), '', false );
wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery','slickvacJS' ), '', false );
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts_style');

/*  */
