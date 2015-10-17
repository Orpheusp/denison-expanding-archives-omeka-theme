<?php
  $pageTitle = __('Search Items');
  echo head(array('title' => $pageTitle,
                  'bodyclass' => 'items advanced-search'));
?>


<?php 
  echo $this->partial('items/search-form.php',
                      array('formAttributes' => array('id'=>'advanced-search-form'))); 
?>

<?php echo js_tag('items-search'); ?>

<script type="text/javascript">
  jQuery(document).ready(function () {
    Omeka.Search.activateSearchButtons();
  });
</script>

<?php echo foot(); ?>
