<?php ?>



<?php get_template_part('components/footer')?>

<!-- JQUARY -->
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js?v2"></script>

<!-- BOOTSTRAP -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- TINYSLIDER -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

<!-- CLIPBOARD -->
<script src="https://unpkg.com/clipboard@2/dist/clipboard.min.js?v2"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script> -->

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js?v2"></script>

<!-- GOOGLE ANALYTICS -->
<?php echo $GLOBALS['cgv']['google-analytics'] ?>

<?php wp_footer(); ?>



<script>

  $(document).ready(function(){
    $('body').scrollspy({
        target: ".navbar",
        offset: 65,
      })
    
    $("#interests").owlCarousel({
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      loop: true,
      center: true,
      margin: 40,
      responsiveClass: true,
      dots: false,
      nav: true, 
      // scrollPerPage: true,
      items:1,
      slideBy: 2,
      responsive:{
          0:{
              items:1,
          },
          600:{
              items:3,
          },
          1000:{
              items:6,
              slideBy: 3,
              // loop:true
          }
      }
    });

    $("#skils").owlCarousel({
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      loop: true,
      center: true,
      margin: 40,
      responsiveClass: true,
      dots: false,
      nav: true, 
      scrollPerPage: true,
      slideBy: 2,
      responsive:{
          0:{
              items:1,
          },
          600:{
              items:3,
          },
          1000:{
              items:8,
              slideBy: 4,
          }
      }
    });
  });

  bootstrap.Toast.Default.delay = 5000;

  var clip = new ClipboardJS('.copy');

  clip.on("success", function() {
    $('#email-toast-certo').toast('show')
  });
  clip.on("error", function() {
    $('#email-toast-errado').toast('show')
  });

  $('.to-croll[href^="#"]').on('click', function(e) {
	  e.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;
        
    $('html, body').animate({ 
      scrollTop: targetOffset - 50
    }, 500);
});


AOS.init();

</script>


</body>
</html>
