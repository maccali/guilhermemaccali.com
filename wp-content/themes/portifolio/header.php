<?php ?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="#0e2c54" />
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(). '/img/favicon.png'?>" />

        <?php (get_field('title', get_the_ID()) == '') ? $pageTitle = '404' : $pageTitle = get_field('title', get_the_ID())?>

        <title><?php echo $pageTitle ?></title>

        <!-- RELAÇAO DE LINKS XFN -->
        <link rel="profile" href="https://gmpg.org/xfn/11" />

        <!-- GOOGLE PROPERTY VERIFICATION -->
        <meta name="google-site-verification" content="HAjlWQjWiA57CNVQ7noJE7H2TfpUTivWdUw5iMCeeXc" />

        <!-- PWA MANIFEST-->
        <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(). '/manifest.webmanifest'?>">
        
        <!-- GOOGLE FONTS -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/css/googlefonts.min.css?v1'?>">

        <!-- FONTAWESOME -->
        <script src="https://kit.fontawesome.com/cb8d80800e.js" crossorigin="anonymous"></script>
        
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/css/bootstrap.min.css?v1'?>">
        
        <!-- AOS JS -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/css/aos.min.css?v1'?>">

        <!-- OWL COAROUSEL-->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/css/owl.carousel.min.css?v1'?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/css/owl.theme.default.min.css?v1'?>">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" >
    <?php wp_body_open(); ?>
    <?php get_template_part('components/menu')?>
    <?php get_template_part('components/redessociais')?>




