<?php echo head(array('title' => metadata('simple_pages_page', 'title'),
                      'bodyclass' => 'page simple-page',
                      'bodyid' => metadata('simple_pages_page', 'slug')
                     )
               ); 
?>

<div class="container">
  <div class="section-header col-md-10 col-md-offset-1">
    <small>-PAGES-</small>
    <h1>Article</h1>
  </div><!-- end of section-header -->
  
  <article class="col-md-12">
    <div class="article-header col-md-10 col-md-offset-1">
    </div><!-- end of article-header -->

    <div class="col-md-10 col-md-offset-1">
      <p id="simple-pages-breadcrumbs" class="navigation secondary-nav">
        <?php echo simple_pages_display_breadcrumbs(); ?>
      </p><!-- end of simple-pages-breadcrumbs -->
    </div>

    <div class="col-md-8 col-md-offset-1">
      <div class="article-header">
        <h1>
          <?php echo metadata('simple_pages_page', 'title'); ?>
        </h1>
      </div><!-- end of article-header -->
    </div>

    <div class="col-md-10 col-md-offset-1">
      <div class="article-content">
        <?php
          $text = metadata('simple_pages_page', 'text', array('no_escape' => true));
          echo $this->shortcodes($text);
        ?>
      </div><!-- end of article-content -->
    </div>
  </article>
</div><!--end of container -->

<?php echo foot(); ?>
