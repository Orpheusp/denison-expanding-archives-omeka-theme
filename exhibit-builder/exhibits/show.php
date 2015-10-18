<?php
  echo head(array(
      'title' => metadata('exhibit_page', 'title') . ' &middot; ' . metadata('exhibit', 'title'),
      'bodyclass' => 'exhibits show'));
?>

<?php
  $title = metadata('exhibit_page', 'title');
?>

<div class="container exhibit">
  <div class="section-header col-md-10 col-md-offset-1">
    <small>-EXHIBIT-</small>
    <h1><?php echo $title ?></h1>
  </div><!-- end of section-header -->
  
  <article>
    <div class="col-md-8 col-md-offset-2">
      <div class="article-content">
        <?php exhibit_builder_render_exhibit_page(); ?>
      </div>
    </div>
  </article>

  <div id="exhibit-page-navigation">
    <?php if ($prevLink = exhibit_builder_link_to_previous_page()): ?>
      <div id="exhibit-nav-prev">
        <?php echo $prevLink; ?>
      </div>
    <?php endif; ?>
    <?php if ($nextLink = exhibit_builder_link_to_next_page()): ?>
      <div id="exhibit-nav-next">
        <?php echo $nextLink; ?>
      </div>
    <?php endif; ?>
    <div id="exhibit-nav-up">
      <?php echo exhibit_builder_page_trail(); ?>
    </div>
  </div>

  <nav id="exhibit-pages">
    <h4><?php echo exhibit_builder_link_to_exhibit($exhibit); ?></h4>
    <?php echo exhibit_builder_page_tree($exhibit, $exhibit_page); ?>
  </nav>
  
</div><!-- end of container -->
  
<?php echo foot(); ?>
