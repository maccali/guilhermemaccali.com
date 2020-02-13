<?php ?>

<?php wp_footer(); ?>

<?php get_template_part('components/footer')?>

<!-- BOOTSTRAP -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- TINYSLIDER -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

<!-- CLIPBOARD -->
<script src="https://unpkg.com/clipboard@2/dist/clipboard.min.js"></script>



<script>
  // var slider = tns({
  //   container: '.my-slider',
  //   items: 1,
    
  // });

  bootstrap.Toast.Default.delay = 5000;

  var clip = new ClipboardJS('.copy');

  clip.on("success", function() {
    $('#email-tost-certo').toast('show')
  });
  clip.on("error", function() {
    $('#email-tost-errado').toast('show')
  });

</script>
</body>
</html>
