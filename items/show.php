<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'item show')); ?>

<?php
  $title = item('Dublin Core', 'Title');
  $subject = item('Dublin Core', 'Subject');
  $description = item('Dublin Core', 'Description');
  $creators = item('Dublin Core', 'Creator', array('delimiter' => ', '));
  $source = item('Dublin Core', 'Source');
  $publisher = item('Dublin Core', 'Publisher');
  $date = item('Dublin Core', 'Date');
  $contributors = item('Dublin Core', 'Contributor', array('delimiter' => ', '));
  $rights = item('Dublin Core', 'Rights');
  $relation = item('Dublin Core', 'Relation');
  $format = item('Dublin Core', 'Format');
  $language = item('Dublin Core', 'Language');
  $type = item('Dublin Core', 'Type');
  $identitier = item('Dublin Core', 'Identifier');
  $coverage = item('Dublin Core', 'Coverage');
  $tags = tag_string('item');
  $citation = item('citation', array('no_escape' => true));
  $collection = link_to_collection_for_item();
?>
<div class="container item">
  <div class="section-header col-md-10 col-md-offset-1">
    <small>-ITEM-</small>
    <h1><?php echo $title ?></h1>
  </div><!-- end of section-header -->

  <div class="item-image col-lg-8 col-lg-offset-2">    
    <?php if (get_theme_option('Item FileGallery') == 0 && metadata('item', 'has files')): ?>
      <div class="element-text"><?php echo files_for_item(array('imageSize' => 'fullsize')); ?></div>
    <?php endif; ?>
  </div>

  <div class="item-description col-lg-12">
    <div class="col-lg-2">
      <!-- title -->
      <div class="item-description-tag">
        <h1>TITLE</h1>
        <b><?php echo $title ?></b>
      </div>
      <!-- subject -->
      <div class="item-description-tag">
        <h1>SUBJECT</h1>
        <p><?php echo $subject ?></p>
      </div>
      <!-- type -->
      <div class="item-description-tag">
        <h1>TYPE</h1>
        <p><?php echo $type ?></p>
      </div>
      <!-- creator -->
      <div class="item-description-tag">
        <h1>CREATOR</h1>
        <p><?php echo $creators ?></p>
      </div>
    </div>

    <div class="col-lg-2">
      <!-- date -->
      <div class="item-description-tag">
        <h1>DATE</h1>
        <p><?php echo $date ?></p>
      </div>
      <!-- sources -->
      <div class="item-description-tag">
        <h1>SOURCES</h1>
        <p><?php echo $sources ?></p>
      </div>
      <!-- rights -->
      <div class="item-description-tag">
        <h1>RIGHTS</h1>
        <p><?php echo $rights ?></p>
      </div>
    </div>
    
    <div class="col-lg-4">
      <!-- description -->
      <div class="item-description-tag">
        <h1>DESCRIPTION</h1>
        <p><?php echo $description ?></p>
      </div>
      <!-- citation -->
      <div class="item-description-tag">
        <h1>CITATION</h1>
        <p><?php echo $citation ?></p>
      </div>
      <!-- relation -->
      <div class="item-description-tag">
        <h1>SEE ALSO</h1>
        <p><?php echo $relation ?></p>
      </div>
    </div>
    
    <div class="col-lg-2">
      <!-- contributors -->
      <div class="item-description-tag">
        <h1>CONTRIBUTOR</h1>
        <p><?php echo $contributors ?></p>
      </div>
      <!-- tags -->
      <div class="item-description-tag">
        <h1>TAGS</h1>
        <p><?php echo $tags ?></p>
      </div>
      <!-- identifier -->
      <div class="item-description-tag">
        <h1>IDENTIFIER</h1>
        <p><?php echo $identifier ?></p>
      </div>
    </div>

    <div class="col-lg-2">
      <!-- format -->
      <div class="item-description-tag">
        <h1>FORMAT</h1>
        <p><?php echo $format ?></p>
      </div>
      <!-- language -->
      <div class="item-description-tag">
        <h1>LANGUAGE</h1>
        <p><?php echo $language ?></p>
      </div>
      <!-- coverage -->
      <div class="item-description-tag">
        <h1>COVERAGE</h1>
        <p><?php echo $coverage ?></p>
      </div>
      <!-- collection -->
      <div class="item-description-tag">
        <h1>COVERAGE</h1>
        <p><?php echo $collection ?></p>
      </div>
    </div>
    
  </div><!-- end of item-description -->
</div><!-- end of item container -->

<!-- The following returns all of the files associated with an item. -->
<?php if (metadata('item', 'has files') && (get_theme_option('Item FileGallery') == 1)): ?>
  <div id="itemfiles" class="element">
    <h3><?php echo __('Files'); ?></h3>
    <div class="element-text"><?php echo item_image_gallery(); ?></div>
  </div>
<?php endif; ?>

<?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>

<nav>
  <ul class="item-pagination navigation">
    <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
    <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
  </ul>
</nav>

<?php echo foot(); ?>
