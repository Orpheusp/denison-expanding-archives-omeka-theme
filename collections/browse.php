<?php
  $pageTitle = __('Browse Collections');
  echo head(array('title'=>$pageTitle,'bodyclass' => 'collections browse'));
?>

<div class="container">
  
  <div class="section-header col-md-10 col-md-offset-1">
    <small>-BROWSE-</small>
    <h1>Collections <?php echo __('(%s total)', $total_results); ?></h1>
  </div>
  
  <div class="sort-links col-md-8 col-md-offset-2">
    <span class="sort-label">-SORT BY-</span>
    <?php 
      echo pagination_links();
      $sortLinks[__('Title')] = 'Dublin Core,Title';
      $sortLinks[__('Date Added')] = 'added';
      echo browse_sort_links($sortLinks);
    ?>
  </div><!-- end of sort-links -->
  
</div><!-- end of container -->

<div class="search-results">
  <?php foreach (loop('collections') as $collection): ?>
    <?php
      $collectionLink = record_url(get_current_record('collection'));
      $collectionTitle = metadata('collection', array('Dublin Core', 'Title'));
      $collectionId = metadata('collection', 'id');
      $collectionImage = record_image('collection', 'square_thumbnail');
      $collectionDescription = metadata('collection', array('Dublin Core', 'Description'), array('snippet'=>150));
      $collectionContributors = metadata('collection', array('Dublin Core', 'Contributor'), array('all'=>true, 'delimiter'=>', '));
    ?>

    <div class="exhibit-item" onclick="window.location='<?php echo $collectionLink ?>'">
      <?php echo $collectionImage ?>
      <h1><?php echo $collectionTitle; ?></h1>
      <p><?php echo $collectionDescription; ?></p>
      <p><b>Contributors:</b><?php echo $collectionContributors; ?></p>
      <?php fire_plugin_hook('public_collections_browse_each', array('view' => $this, 'collection' => $collection)); ?>
    </div>

  <?php endforeach; ?>
</div>

<div class="container">
  <?php echo pagination_links(); ?>
</div>

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

<?php 
  fire_plugin_hook('public_collections_browse', array('collections'=>$collections, 'view' => $this));
  echo foot(); 
?>
