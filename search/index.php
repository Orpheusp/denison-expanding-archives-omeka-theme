<?php
  $pageTitle = __('Search') . ' ' . __('(%s total)', $total_results);
  echo head(array('title' => $pageTitle, 'bodyclass' => 'search'));

  $searchRecordTypes = get_search_record_types();

  $filter = new Zend_Filter_Word_CamelCaseToDash;
?>

<div class="container">
  <div class="section-header col-md-10 col-md-offset-1">
    <small>-SEARCH-</small>
    <h1><?php echo $pageTitle; ?></h1>
  </div>

  <div class="sort-links col-md-8 col-md-offset-2">
    <?php echo search_filters(); ?>
  </div><!-- end of sort-links -->
</div><!-- end of container -->
  
  <?php if ($total_results): ?>
    <div class="container">
      <?php echo pagination_links(); ?>
    </div>

    <div class="search-results">
      <?php foreach (loop('search_texts') as $searchText): ?>
        <?php
          $record = get_record_by_id($searchText['record_type'], $searchText['record_id']);
          $recordType = $searchText['record_type'];
          set_current_record($recordType, $record);
          $recordLink = record_url($record, 'show');
          $recordTitle = $searchText['title'] ? $searchText['title'] : '[Unknown]';
          $recordImage = record_image($recordType, 'square_thumbnail');
          
        ?>
      
      <div class="exhibit-item" onclick="window.location='<?php echo $recordLink ?>'">
        <?php echo $recordImage; ?>
        <h1><?php echo $recordTitle; ?></h1>
      </div>
      <?php endforeach; ?>

    </div>

  <div class="container">
    <?php echo pagination_links(); ?>
  </div>

  <?php else: ?>
    <div id="no-results">
      <p><?php echo __('Your query returned no results.');?></p>
    </div>
  <?php endif; ?>

<script type="text/javascript">
  jQuery(document).ready(function () {
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

<?php echo foot(); ?>