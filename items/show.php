<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'item show')); ?>

<?php
  $title = metadata('item', array('Dublin Core', 'Title'));
  $subject = metadata('item', array('Dublin Core', 'Subject'));
  $description = metadata('item', array('Dublin Core', 'Description'));
  $creators = metadata('item', array('Dublin Core', 'Creator'));
  $source = metadata('item', array('Dublin Core', 'Source'));
  $publisher = metadata('item', array('Dublin Core', 'Publisher'));
  $date = metadata('item', array('Dublin Core', 'Date'));
  $contributors = metadata('item', array('Dublin Core', 'Contributor'));
  $rights = metadata('item', array('Dublin Core', 'Rights'));
  $relation = metadata('item', array('Dublin Core', 'Relation'));
  $format = metadata('item', array('Dublin Core', 'Format'));
  $language = metadata('item', array('Dublin Core', 'Language'));
  $type = metadata('item', array('Dublin Core', 'Type'));
  $identifier = metadata('item', array('Dublin Core', 'Identifier'));
  $coverage = metadata('item', array('Dublin Core', 'Coverage'));
  $tags = tag_string('item');
  $citation = metadata('item', 'citation', array('no_escape' => true));
  $collection = link_to_collection_for_item();

  function showItemDescriptionTag($tagName, $tagVal) {
    echo __('<div class="item-description-tag">');
    echo __('  <h1>'.$tagName.'</h1>');
    if ($tagName == 'TITLE') {
      echo __('  <b>'.$tagVal.'</b>');
    } else {
      echo __('  <p>'.$tagVal.'</p>');
    }
    echo __('</div>');
  }
?>
<div class="container item">
  <div class="section-header col-md-10 col-md-offset-1">
    <small>-ITEM-</small>
    <h1><?php echo $title ?></h1>
  </div><!-- end of section-header -->

  <div class="item-image col-lg-8 col-lg-offset-2">    
    <?php if (get_theme_option('Item FileGallery') == 0 && metadata('item', 'has files')): ?>
      <?php echo files_for_item(array('imageSize' => 'fullsize')); ?>
    <?php endif; ?>
  </div><!-- end of item-image -->

  <div class="item-description col-lg-12">
    <div class="col-lg-2">
      <?php 
        showItemDescriptionTag('TITLE', $title); 
        showItemDescriptionTag('SUBJECT', $subject); 
        showItemDescriptionTag('TYPE', $type); 
        showItemDescriptionTag('CREATOR', $creators); 
      ?>
    </div>

    <div class="col-lg-2">
      <?php 
        showItemDescriptionTag('DATE', $date); 
        showItemDescriptionTag('SOURCE', $source); 
        showItemDescriptionTag('RIGHTS', $rights); 
      ?>
    </div>
    
    <div class="col-lg-4">
      <?php 
        showItemDescriptionTag('DESCRIPTION', $description); 
        showItemDescriptionTag('CITATION', $citation); 
        showItemDescriptionTag('SEE ALSO', $relation); 
      ?>
    </div>
    
    <div class="col-lg-2">
      <?php 
        showItemDescriptionTag('CONTRIBUTOR', $contributors); 
        showItemDescriptionTag('TAGS', $tags); 
        showItemDescriptionTag('IDENTIFIER', $identifier); 
      ?>
    </div>

    <div class="col-lg-2">
      <?php 
        showItemDescriptionTag('FORMAT', $title); 
        showItemDescriptionTag('LANGUAGE', $subject); 
        showItemDescriptionTag('COVERAGE', $type); 
        showItemDescriptionTag('COLLECTION', $creators); 
      ?>
    </div>
    
  </div><!-- end of item-description -->
</div><!-- end of item container -->

<?php echo foot(); ?>
