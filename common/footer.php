<?php if (!$vars || $vars['displayFooter']): ?>
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
<?php endif; ?>
</body>

<script type="text/javascript">
  jQuery(document).ready(function () {
    Omeka.showAdvancedForm();
  });
  
  $(document).ready( function() {
    // init Masonry
    var $grid = $('.search-results').masonry({
      itemSelector: '.exhibit-item',
      columnWidth: '.exhibit-item',
      gutter: 30
    });
    // layout Isotope after each image loads
    $grid.imagesLoaded().progress( function() {
      $grid.masonry();
    });  
  });
</script>

</html>
