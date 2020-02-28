<?php 

function add_theme_scripts() { 

    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/hp.css', false, '1.2','all');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/libs/owlCarousel/assets/owl.carousel.min.css', false, '1.1','all');
    wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/libs/owlCarousel/assets/owl.theme.default.min.css', false, '1.1','all');


    wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/libs/owlCarousel/owl.carousel.min.js', array(), "1.1", true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// function post_type_habilidades(){
//     register_post_type( 'habilidades',
//     array(
//         'labels' => array(
//             'name' => __( 'Habilidades' ),
//             'singular_name' => __( 'Habilidade' )
//         ),
//         'public' => true,
//         'has_archive' => true,
//         'rewrite' => array( 'slug' => 'habilidade' ),
//         'menu_position' => 5,
//         'supports' => array ( 'title', 'editor', 'thumbnail', 'custom-fields' )
//         )
//     );
// }
// add_action ( 'init', 'post_type_habilidades' );


?>