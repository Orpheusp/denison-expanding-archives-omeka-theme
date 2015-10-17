<?php
  $pageTitle = __('Browse Items');
  echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
?>

<div class="drawer-under">
  <?php 
    echo $this->partial('items/search-form.php',
                        array('formAttributes' => array('id'=>'advanced-search-form'))); 
  ?>
</div><!-- end of drawer-under -->

<div class="drawer-above">
  <div class="container">
    <div class="section-header col-md-10 col-md-offset-1">
      <small>-BROWSE-</small>
      <h1>Items <?php echo __('(%s total)', $total_results); ?></h1>
    </div>

    <div class="sort-links col-md-8 col-md-offset-2">
      <span class="sort-label">-SORT BY-</span>
      <?php 
        echo pagination_links();
        if ($total_results > 0) {
          $sortLinks[__('Title')] = 'Dublin Core,Title';
          $sortLinks[__('Creator')] = 'Dublin Core,Creator';
          $sortLinks[__('Date Added')] = 'added';
          echo browse_sort_links($sortLinks);
        }
      ?>
    </div><!-- end of sort-links -->

    <div class="outputs col-md-8 col-md-offset-2">
      <span class="outputs-label">-OUTPUT-</span>
      <?php echo output_format_list(false, ''); ?>
    </div><!-- end of outputs -->

  </div><!-- end of container -->

  <div class="search-results">
    <?php foreach (loop('items') as $item): ?>
      <?php 
        $itemLink = record_url(get_current_record('item'));
        $itemImageTag = item_image('square_thumbnail');
        $itemTitle = metadata('item', array('Dublin Core', 'Title'));
        $itemDescription = metadata('item', array('Dublin Core', 'Description'), array('snippet'=>250));
      ?>
      <a class="exhibit-item" href="<?php echo $itemLink ?>">
        <?php echo $itemImageTag ?>
        <h1><?php echo $itemTitle ?></h1>
        <p><?php echo $itemDescription ?></p>
        <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>
      </a>
    <?php endforeach; ?>
  </div><!-- end of grid-->

  <div class="container">
    <?php echo pagination_links(); ?>
  </div>

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

</div><!-- end of drawer-above -->

<?php 
  fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); 
  echo foot(array('displayFooter' => false));
?>
