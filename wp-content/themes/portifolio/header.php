<?php ?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(). '/img/favicon.ico'?>" />
        <title><?php echo get_field('title', get_the_ID())?></title>

        <link rel="profile" href="https://gmpg.org/xfn/11" />
        
        <!-- FONTAWESOME -->
        <script src="https://kit.fontawesome.com/cb8d80800e.js" crossorigin="anonymous"></script>
        
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <!-- TINYSLIDER -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">

        <!-- AOS JS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php get_template_part('components/menu')?>
    <?php get_template_part('components/redessociais')?>




