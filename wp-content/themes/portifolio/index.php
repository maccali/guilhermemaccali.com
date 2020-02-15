<?php get_header(); ?>
    <div class="container">
        <?php set_query_var('titulo', 'fdsfds');?>
        <!-- <?php get_template_part('components/gridnav')?> -->
    </div>


    <!-- <?php var_dump(get_field("habilidades"));?> -->
    
    <?php get_template_part('components/sobre')?>
    <?php get_template_part('components/skils')?>
    <?php get_template_part('components/curriculo')?>
    <?php get_template_part('components/contato')?>
    <?php get_template_part('components/toast')?>

<?php get_footer();
