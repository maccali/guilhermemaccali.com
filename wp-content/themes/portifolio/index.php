<?php get_header(); ?>
    <div class="container">
        <?php set_query_var('titulo', 'fdsfds');?>
        <!-- <?php get_template_part('components/gridnav')?> -->
    </div>

    <?php get_template_part('components/sobre')?>
    <?php get_template_part('components/contato')?>
    <?php get_template_part('components/toast')?>

<?php get_footer();
