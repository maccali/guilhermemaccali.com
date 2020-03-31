<?php ?>

<?php get_template_part('components/footer')?>

<!-- JQUARY -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(). '/js/jquery.min.js?v1'?>"></script>

<!-- BOOTSTRAP -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(). '/js/popper.min.js?v1'?>"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(). '/js/bootstrap.min.js?v1'?>"></script>

<!-- CLIPBOARD -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(). '/js/clipboard.min.js?v1'?>"></script>

<!-- AOS JS -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(). '/js/aos.min.js?v1'?>"></script>

<!-- OWL CAROUSEL -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(). '/js/owlcarousel.min.js?v1'?>"></script>

<!-- MACY MASONRY -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(). '/js/macy.js?v1'?>"></script>

<!-- GOOGLE ANALYTICS -->
<?php echo $GLOBALS['cgv']['google-analytics'] ?>
    
<?php wp_footer(); ?>

<!-- CUSTOM JS -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(). '/js/local.js?v1'?>"></script>

</body>
</html>
