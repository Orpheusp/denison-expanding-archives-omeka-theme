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
  <div class="section-header col-md-10 col-md-offset-1">
    <small>-COLLECTION-</small>
    <h1><?php echo $title ?></h1>
  </div><!-- end of section-header -->
</div>

<div id="collection-items">
  <h2><?php echo link_to_items_browse(__('Items in the %s Collection', $title), array('collection' => metadata('collection', 'id'))); ?></h2>
  <?php if (metadata('collection', 'total_items') > 0): ?>
      <?php foreach (loop('items') as $item): ?>
      <?php $itemTitle = strip_formatting(metadata('item', array('Dublin Core', 'Title'))); ?>
      <div class="item hentry">
          <h3><?php echo link_to_item($itemTitle, array('class'=>'permalink')); ?></h3>

          <?php if (metadata('item', 'has thumbnail')): ?>
          <div class="item-img">
              <?php echo link_to_item(item_image('square_thumbnail', array('alt' => $itemTitle))); ?>
          </div>
          <?php endif; ?>

          <?php if ($text = metadata('item', array('Item Type Metadata', 'Text'), array('snippet'=>250))): ?>
          <div class="item-description">
              <p><?php echo $text; ?></p>
          </div>
          <?php elseif ($description = metadata('item', array('Dublin Core', 'Description'), array('snippet'=>250))): ?>
          <div class="item-description">
              <?php echo $description; ?>
          </div>
          <?php endif; ?>
      </div>
      <?php endforeach; ?>
  <?php else: ?>
    <p><?php echo __("There are currently no items within this collection."); ?></p>
  <?php endif; ?>
</div><!-- end collection-items -->

<div class="container">
  <div class="collection-description col-lg-12">
    <div class="col-lg-2 col-md-3 col-sm-6">
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
        showCollectionDescriptionTag('IDENTIFIER', $identifier); 
      ?>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-6">
      <?php 
        showCollectionDescriptionTag('LANGUAGE', $language); 
        showCollectionDescriptionTag('COVERAGE', $coverage); 
        showCollectionDescriptionTag('RIGHTS', $rights); 
      ?>
    </div>
    
    <div class="col-lg-4 col-md-6 col-sm-12">
      <?php 
        showCollectionDescriptionTag('DESCRIPTION', $description);
        showCollectionDescriptionTag('SEE ALSO', $relation); 
        showCollectionDescriptionTag('OUTPUT FORMAT', $outputFormat);
      ?>
    </div>
    
  </div><!-- end of collection-description -->
</div>

<?php fire_plugin_hook('public_collections_show', array('view' => $this, 'collection' => $collection)); ?>

<?php echo foot(); ?>
