<?php
  $title = __('Browse Exhibits');
  echo head(array('title' => $title, 'bodyclass' => 'exhibits browse'));
?>

<div class="container">
  
  <div class="section-header col-md-10 col-md-offset-1">
    <small>-BROWSE-</small>
    <h1>Exhibits <?php echo __('(%s total)', $total_results); ?></h1>
  </div>
  
</div>

<?php if (count($exhibits) > 0): ?>
  <?php echo pagination_links(); ?>

  <div class="search-results">
    <?php foreach (loop('exhibit') as $exhibit): ?>
      <?php
        $exhibitLink = record_url(get_current_record('exhibit'));
        $exhibitTitle = metadata('exhibit', 'title',  array('no_escape' => true));
        $exhibitImage = record_image($exhibit, 'square_thumbnail');
        $exhibitDescription = metadata('exhibit', 'description', array('no_escape' => true, 'snippet'=>150));
        $exhibitTags = tag_string('exhibit', 'exhibits', '');
      ?>

      <div class="exhibit-item" onclick="window.location='<?php echo $exhibitLink ?>'">
        <?php echo $exhibitImage ?>
        <h1><?php echo $exhibitTitle; ?></h1>
        <p><?php echo $exhibitDescription; ?></p>
        <div class="tags"><?php echo $exhibitTags; ?><div>
      </div>

    <?php endforeach; ?>
  </div>

  <div class="containter">
    <?php echo pagination_links(); ?>
  </div>

<?php else: ?>
  <div class="container">
    <article>
      <div class="col-md-8 col-md-offset-2">
        <div class="article-content">
          <p>There are no exhibits available yet.</p>
        </div>
      </div>
    </article>
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
