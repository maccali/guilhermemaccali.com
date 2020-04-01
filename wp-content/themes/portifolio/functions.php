<?php 

function add_theme_scripts() { 
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/hp.css', false, '1.5','all');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// The custom function MUST be hooked to the init action hook
add_action( 'init', 'lc_custom_post_meus_projetos' );
// A custom function that calls register_post_type
function lc_custom_post_meus_projetos() {
 
    // Set the labels, this variable is used in the $args array
    $labels = array(
      'name'               => __( 'Projetos' ),
      'singular_name'      => __( 'Projeto' ),
      'add_new'            => __( 'Adicionar novo Projeto' ),
      'add_new_item'       => __( 'Adicionar novo Projeto' ),
      'edit_item'          => __( 'Editar Projeto' ),
      'new_item'           => __( 'Novo Projeto' ),
      'all_items'          => __( 'Todos os Projetos' ),
      'view_item'          => __( 'Ver Projeto' ),
      'search_items'       => __( 'ProcurarProjetos' ),
      'featured_image'     => 'Thumb',
      'set_featured_image' => 'Adicionar Thumb'
    );
   
    // The arguments for our post type, to be entered as parameter 2 of register_post_type()
    $args = array(
      'labels'            => $labels,
      'description'       => 'Coloque a descrição do projeto',
      'public'            => true,
      'menu_position'     => 5,
      'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ),
      'has_archive'       => true,
      'show_in_admin_bar' => true,
      'show_in_nav_menus' => true,
      'has_archive'       => true,
      'query_var'         => 'project'
    );
   
    // Call the actual WordPress function
    // Parameter 1 is a name for the post type
    // Parameter 2 is the $args array
    register_post_type( 'projeto', $args);

}

?>