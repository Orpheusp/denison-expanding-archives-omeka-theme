<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
  <?php endif; ?>
  
  <?php
    if (isset($title)) {
      $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
  ?>
  
  <title><?php echo implode(' &middot; ', $titleParts); ?></title>

  <?php echo auto_discovery_link_tags(); ?>

  <!-- Plugin Stuff -->

  <!-- Stylesheets -->
  
  <?php 
    queue_css_file(array('screen','style'));
    queue_css_url('//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');
    echo head_css();
  ?>

  <!-- JavaScripts -->
  
</head>
  
<?php echo body_tag(); ?>

<input type="checkbox" id="nav-drawer-toggle" class="checkbox-hidden">
<label class="nav-drawer-shade" for="nav-drawer-toggle" onclick></label>
<div class="nav-drawer">
  <div class="nav-container">
    <div class="container">
      <nav id="primary-nav" role="navigation" class="col-md-12">
        <?php echo public_nav_main(array('role' => 'navigation', 'class' => 'col-md-6 col-md-offset-1')); ?>

        <div id="search-container" role="search" class="col-md-4">
          <?php if (get_theme_option('use_advanced_search') === null || get_theme_option('use_advanced_search')): ?>
            <?php echo search_form(array('show_advanced' => true)); ?>
          <?php else: ?>
            <?php echo search_form(); ?>
          <?php endif; ?>
        </div>
      </nav>
      
    </div><!-- end of container-->
  </div><!-- end of nav-container-->

  <div class="container">
    <label class="navigation-button col-md-2 col-md-offset-5" for="nav-drawer-toggle">
      <p class="sans-serif-800">EXPANDING</p>
      <p class="serif-400">ARCHIVE</p>
    </label>
  </div><!-- end of container-->

</div><!-- end of nav-drawer-->
