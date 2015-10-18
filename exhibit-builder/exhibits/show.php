<?php
  echo head(array(
      'title' => metadata('exhibit_page', 'title') . ' &middot; ' . metadata('exhibit', 'title'),
      'bodyclass' => 'exhibits show'));
?>

<?php
  $title = metadata('exhibit_page', 'title');
?>

<div class="container exhibit">
  <div class="section-header col-md-8 col-md-offset-2">
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

  <nav id="exhibit-pages" class="col-md-8 col-md-offset-2">
    <p><?php echo exhibit_builder_link_to_exhibit($exhibit); ?></p>
    <?php echo exhibit_builder_page_tree($exhibit, $exhibit_page); ?>
  </nav>
  
  <nav>
    <ul id="exhibit-page-navigation" class="pager">
      <?php if ($prevLink = exhibit_builder_link_to_previous_page()): ?>
        <li id="exhibit-nav-prev" class="previous">
          <?php echo $prevLink; ?>
        </li>
      <?php endif; ?>
      <?php if ($nextLink = exhibit_builder_link_to_next_page()): ?>
        <li id="exhibit-nav-next" class="next">
          <?php echo $nextLink; ?>
        </li>
      <?php endif; ?>
    </ul>
    <div id="exhibit-nav-up">
      <?php echo exhibit_builder_page_trail(); ?>
    </div>
  </nav>

  
  
</div><!-- end of container -->
  
<?php echo foot(); ?>
