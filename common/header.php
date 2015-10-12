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
  <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>
  
  <!-- Stylesheets -->
  <?php 
    queue_css_file('screen', 'screen'); 
    queue_css_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');
    echo head_css();
  ?>
  
  <!-- JavaScripts -->
  <?php
    queue_js_file('globals');
    echo head_js(); 
  ?>
  
</head>
  
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    
  <input type="checkbox" id="nav-drawer-toggle" class="checkbox-hidden">
  <label class="nav-drawer-shade" for="nav-drawer-toggle" onclick></label>
  <div class="nav-drawer">
    <div class="nav-container">
      <div class="container">
        <nav id="primary-nav" role="navigation" class="col-md-12">
          <?php 
            $menu = public_nav_main();
            $menu -> setUlClass('col-md-6 col-md-offset-1 navigation');
            echo $menu; 
          ?>
          
          <div id="search-container" role="search" class="col-md-4">
            <?php 
              if (get_theme_option('use_advanced_search') === null ||
                  get_theme_option('use_advanced_search')):
                echo search_form(array('show_advanced' => true,
                                       'submit_value' => 'Search')); 
              else:
                echo search_form();
              endif; 
            ?>
          </div>
          
          <div id="footer-text" class="col-md-8 col-md-offset-2">
            <?php 
              echo get_theme_option('Footer Text'); 
              if ((get_theme_option('Display Footer Copyright') == 1) && 
                  $copyright = option('copyright')):
                echo __('<p>'.$copyright.'</p>');
              endif;
              echo __('</p>Proudly powered by <a href="http://omeka.org">Omeka</a>.</p>'); 
            ?>
          </div><!-- end of footer-text -->
          
        </nav>
        
      </div><!-- end of container-->
    </div><!-- end of nav-container-->
  </div><!-- end of nav-drawer-->
  
  <label class="navigation-button" for="nav-drawer-toggle">
    <p class="sans-serif-800">EXPANDING</p>
    <p class="serif-400">ARCHIVE</p>
  </label>
          

            
