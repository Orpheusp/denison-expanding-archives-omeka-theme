<?php echo head(); ?>

<?php
  function showSection($sectionNum) {
    $themeUploadsPath = '/files/theme_uploads/';
    $themeOptionPrefix = 'homepage_jumbotron_section_'.$sectionNum.'_';
    
    $sectionBackgroundImage = get_theme_option($themeOptionPrefix.'background_image');
    $sectionBackgroundImagePath = $themeUploadsPath.$sectionBackgroundImage;
    $sectionTitleIcon = get_theme_option($themeOptionPrefix.'title_icon');
    $sectionTitle1 = get_theme_option($themeOptionPrefix.'title_1');
    $sectionTitle2 = get_theme_option($themeOptionPrefix.'title_2');
    $sectionInfo = get_theme_option($themeOptionPrefix.'info');
    $sectionLink = get_theme_option($themeOptionPrefix.'link');
  
  
    echo __('<div class="section">');
    echo __('  <img src="'.$sectionBackgroundImagePath.'" class="background">');
    echo __('  <div class="front">');
    echo __('    <div class="container">');
    echo __('      <span class="glyphicon '.$sectionTitleIcon.'" aria-hidden="true"></span>');
    echo __('      <p class="sans-serif-800">'.$sectionTitle1.'</p>');
    echo __('      <p class="serif-400">'.$sectionTitle2.'</p>');
    echo __('    </div>');
    echo __('  </div>');
    echo __('  <div class="back">');
    echo __('    <p>'.$sectionInfo.'</p>');
    echo __('    <a href="'.$sectionLink.'">LEARN MORE</a>');
    echo __('  </div>');
    echo __('</div>');
  }
?>

<div class="container-fluid highlight-jumbotron">
  <div class="col-md-6">
    <?php showSection(1) ?>
    <?php showSection(2) ?>
  </div>
  
  <div class="col-md-6">
    <?php showSection(3) ?>
    <?php showSection(4) ?>
  </div>
</div>

<div class="homepage-logo">
  <p class="sans-serif-800">EXPANDING</p>
  <p class="serif-400">ARCHIVE</p>
</div>


</body>

<script src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
<script src="javascripts/global.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function () {
    Omeka.showAdvancedForm();
  });
</script>

</html>
