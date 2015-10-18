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
    <button class="expand-advanced-search closed">
      <span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
      <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
      ADVANCED SEARCH
    </button>
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

    

  </div><!-- end of container -->

  <div class="search-results">
    <?php foreach (loop('items') as $item): ?>
      <?php 
        $itemLink = record_url(get_current_record('item'));
        $itemImageTag = item_image('square_thumbnail');
        $itemTitle = metadata('item', array('Dublin Core', 'Title'));
        $itemDescription = metadata('item', array('Dublin Core', 'Description'), array('snippet'=>250));
        $itemTags = tag_string('item', 'items/browse', '');
      ?>
      <div class="exhibit-item" onclick="window.location='<?php echo $itemLink ?>'">
        <?php echo $itemImageTag; ?>
        <h1><?php echo $itemTitle; ?></h1>
        <p><?php echo $itemDescription; ?></p>
        <p><?php echo $itemTags; ?></p>
        <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>
      </div>
    <?php endforeach; ?>
  </div><!-- end of grid-->

  <div class="container">
    <?php echo pagination_links(); ?>
    
    <div class="outputs col-md-8 col-md-offset-2">
      <span class="outputs-label">-OUTPUT-</span>
      <?php echo output_format_list(false, ''); ?>
    </div><!-- end of outputs -->
    
  </div>

  <footer role="contentinfo" class="jumbotron">
    <div class="container">
      <div id="footer-text" class="col-md-8 col-md-offset-2">
        <?php 
          echo get_theme_option('Footer Text'); 
          if ((get_theme_option('Display Footer Copyright') == 1) && 
              $copyright = option('copyright')) {
            echo __('<p>'.$copyright.'</p>');
        }
          echo __('<p>Proudly powered by <a href="http://omeka.org">Omeka</a>.</p>'); 
        ?>
      </div><!-- end of footer-text -->
    </div><!-- end of container -->
  </footer><!-- end footer -->

</div><!-- end of drawer-above -->

<?php echo js_tag('items-search'); ?>

<script type="text/javascript">
  jQuery(document).ready(function () {
    Omeka.Search.activateSearchButtons();
    
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
    
    var expandAdvancedSearch = $('.drawer-above button.expand-advanced-search');
    var addSearchButton = $('#search-narrow-by-fields button.add_search');
    
    var drawerAbove = $('.drawer-above');
    var drawerUnder = $('.drawer-under');
    var drawerUnderMargin = 120;
    var drawerAboveOriginalTop = 210;
    
    var updateDrawerAbovePosition = function () {
      if (expandAdvancedSearch.hasClass('open')) {
        drawerAbove.css({top: drawerUnderMargin + drawerUnder.height()});
      }
    };
    
    var updateRemoveSearchButtons = function () {
      $('#search-narrow-by-fields button.remove_search').click(updateDrawerAbovePosition);
    };
    
    expandAdvancedSearch.click(function () {
        if (expandAdvancedSearch.hasClass('closed')) {
        expandAdvancedSearch.removeClass('closed');
        expandAdvancedSearch.addClass('open');
        drawerAbove.css({top: drawerUnderMargin + drawerUnder.height()});
      } else {
        expandAdvancedSearch.addClass('closed');
        expandAdvancedSearch.removeClass('open');
        drawerAbove.css({top: drawerAboveOriginalTop});
      }
    });
    
    addSearchButton.click(function () {
      if (expandAdvancedSearch.hasClass('open')) {
        updateRemoveSearchButtons();
      }
      updateDrawerAbovePosition();
    });
    
  });
</script>

<?php 
  fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); 
  echo foot(array('displayFooter' => false));
?>
