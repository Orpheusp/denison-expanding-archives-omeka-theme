<?php
  $pageTitle = __('Browse Items');
  echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
?>

<h1>
  <?php 
    echo $pageTitle;
    echo __('(%s total)', $total_results); 
  ?>  
</h1>

<div class="container">
  <nav class="items-nav navigation secondary-nav">
    <?php echo public_nav_items(); ?>
  </nav>

  <?php 
    echo item_search_filters(); 
    echo pagination_links();
    if ($total_results > 0) {
      $sortLinks[__('Title')] = 'Dublin Core,Title';
      $sortLinks[__('Creator')] = 'Dublin Core,Creator';
      $sortLinks[__('Date Added')] = 'added';
      echo __('<div id="sort-links">');
      echo __('  <span class="sort-label">Sort by: </span>');
      echo browse_sort_links($sortLinks);
      echo __('</div>');
    }
  ?>
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

  <div id="outputs">
    <span class="outputs-label"><?php echo __('Output Formats'); ?></span>
    <?php echo output_format_list(false); ?>
  </div>
</div><!-- end of container -->


<?php 
  fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); 
  echo foot();
?>
