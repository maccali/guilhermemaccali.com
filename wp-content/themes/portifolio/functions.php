<?php 

function add_theme_scripts() { 

    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/hp.css', false, '1.1','all');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>