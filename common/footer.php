<footer role="contentinfo" class="jumbotron">
  <div class="container">
    <div id="footer-text" class="col-md-8 col-md-offset-2">
      <?php 
        echo get_theme_option('Footer Text'); 
        if ((get_theme_option('Display Footer Copyright') == 1) && 
            $copyright = option('copyright')):
          echo __('<p>'.$copyright.'</p>');
        endif;
        echo __('<p>Proudly powered by <a href="http://omeka.org">Omeka</a>.</p>'); 
      ?>
    </div><!-- end of footer-text -->
  </div><!-- end of container -->
</footer><!-- end footer -->

</body>

<script src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
<?php queue_js_file('globals');?>
<script type="text/javascript">
  jQuery(document).ready(function () {
    Omeka.showAdvancedForm();
    Omeka.showGrid();
  });
</script>

</html>
