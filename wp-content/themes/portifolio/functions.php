<?php 

function add_theme_scripts() { 

    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/hp.css', false, '1.3','all');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/libs/owlCarousel/assets/owl.carousel.min.css', false, '1.1','all');
    wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/libs/owlCarousel/assets/owl.theme.default.min.css', false, '1.1','all');


    wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/libs/owlCarousel/owl.carousel.min.js', array(), "1.1", true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>