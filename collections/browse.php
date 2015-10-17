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
  
</div>

<?php foreach (loop('collections') as $collection): ?>

<div class="collection record">

    <h2><?php echo link_to_collection(); ?></h2>

    <?php if ($collectionImage = record_image('collection', 'square_thumbnail')): ?>
        <?php echo link_to_collection($collectionImage, array('class' => 'image')); ?>
    <?php endif; ?>
    
    <div class="collection-meta">

    <?php if (metadata('collection', array('Dublin Core', 'Description'))): ?>
    <div class="collection-description">
        <?php echo text_to_paragraphs(metadata('collection', array('Dublin Core', 'Description'), array('snippet'=>150))); ?>
    </div>
    <?php endif; ?>

    <?php if ($collection->hasContributor()): ?>
    <div class="collection-contributors">
        <p>
        <strong><?php echo __('Contributors'); ?>:</strong>
        <?php echo metadata('collection', array('Dublin Core', 'Contributor'), array('all'=>true, 'delimiter'=>', ')); ?>
        </p>
    </div>
    <?php endif; ?>

    <p class="view-items-link"><?php echo link_to_items_browse(__('View the items in %s', metadata('collection', array('Dublin Core', 'Title'))), array('collection' => metadata('collection', 'id'))); ?></p>

    <?php fire_plugin_hook('public_collections_browse_each', array('view' => $this, 'collection' => $collection)); ?>

    </div>

</div><!-- end class="collection" -->

<?php endforeach; ?>

<?php echo pagination_links(); ?>

<?php fire_plugin_hook('public_collections_browse', array('collections'=>$collections, 'view' => $this)); ?>

<?php echo foot(); ?>
