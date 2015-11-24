<?php
  $title = metadata('collection', array('Dublin Core', 'Title'));
  $subject = metadata('collection', array('Dublin Core', 'Subject'));
  $description = metadata('collection', array('Dublin Core', 'Description'));
  $creators = metadata('collection', array('Dublin Core', 'Creator'));
  $source = metadata('collection', array('Dublin Core', 'Source'));
  $publisher = metadata('collection', array('Dublin Core', 'Publisher'));
  $date = metadata('collection', array('Dublin Core', 'Date'));
  $contributors = metadata('collection', array('Dublin Core', 'Contributor'));
  $rights = metadata('collection', array('Dublin Core', 'Rights'));
  $relation = metadata('collection', array('Dublin Core', 'Relation'));
  $format = metadata('collection', array('Dublin Core', 'Format'));
  $language = metadata('collection', array('Dublin Core', 'Language'));
  $type = metadata('collection', array('Dublin Core', 'Type'));
  $identifier = metadata('collection', array('Dublin Core', 'Identifier'));
  $coverage = metadata('collection', array('Dublin Core', 'Coverage'));
  $outputFormat = output_format_list(false, '');

  $id = metadata('collection', 'id');

  function showCollectionDescriptionTag($tagName, $tagVal) {
    echo __('<div class="collection-description-tag">');
    echo __('  <h1>'.$tagName.'</h1>');
    if ($tagName == 'TITLE') {
      echo __('  <b>'.$tagVal.'</b>');
    } else {
      echo __('  <p>'.$tagVal.'</p>');
    }
    echo __('</div>');
  }
?>

<?php echo head(array('title'=> $title, 'bodyclass' => 'collections show')); ?>

<div class="container collection">
  <div class="section-header col-md-8 col-md-offset-2">
    <small>-COLLECTION-</small>
    <h1><?php echo $title ?></h1>
  </div><!-- end of section-header -->
  
  <article class="col-md-12">
    <div class="col-md-8 col-md-offset-2">
      <div class="article-content">
        <p><?php echo $description; ?></p>
        <b>Output Format</b>
        <div><?php echo $outputFormat; ?></div>
      </div><!-- end of article-content -->
    </div>
  </article>
  
</div>


<div class="search-results">
  <?php if (metadata('collection', 'total_items') > 0): ?>
    <?php foreach (loop('items') as $item): ?>
      <?php 
        $itemTitle = metadata('item', array('Dublin Core', 'Title'));
        $itemLink = record_url(get_current_record('item'));
        $itemImage = item_image('square_thumbnail', array('alt' => $itemTitle));
        if (!($itemDescription = metadata('item', array('Item Type Metadata', 'Text'), array('snippet'=>250)))) {
          $itemDescription = metadata('item', array('Dublin Core', 'Description'), array('snippet'=>250));
        }
      ?>
  
      <div class="exhibit-item" onclick="window.location='<?php echo $itemLink ?>'">
        <?php echo $itemImage ?>
        <h1><?php echo $itemTitle; ?></h1>
        <p><?php echo $itemDescription; ?></p>
      </div>

    <?php endforeach; ?>
  <?php else: ?>
    <p>There are currently no items within this collection.</p>
  <?php endif; ?>
</div><!-- end collection-items -->

<div class="container">
  <div class="collection-description col-lg-12">
    <div class="col-lg-2 col-md-3 col-sm-6 col-lg-offset-2">
      <?php 
        showCollectionDescriptionTag('TITLE', $title); 
        showCollectionDescriptionTag('SUBJECT', $subject);
        showCollectionDescriptionTag('SOURCE', $source); 
      ?>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-6">
      <?php 
        showCollectionDescriptionTag('CREATOR', $creators);
        showCollectionDescriptionTag('CONTRIBUTOR', $contributors); 
        showCollectionDescriptionTag('PUBLISHER', $publisher); 
        showCollectionDescriptionTag('DATE', $date); 
      ?>
    </div>
    
    <div class="col-lg-2 col-md-3 col-sm-6">
      <?php 
        showCollectionDescriptionTag('TYPE', $type); 
        showCollectionDescriptionTag('FORMAT', $format);
        showCollectionDescriptionTag('LANGUAGE', $language); 
      ?>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-6">
      <?php
        showCollectionDescriptionTag('RIGHTS', $rights); 
      ?>
    </div>
    
  </div><!-- end of collection-description -->
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
  fire_plugin_hook('public_collections_show', array('view' => $this, 'collection' => $collection));
  echo foot(); 
?>
