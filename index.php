<?php echo head(); ?>

<?php
  ($jumbotronSection1BackgroundImage = get_theme_option('homepage_jumbotron_section_1_background_image'));
  ($jumbotronSection1TitleIcon = get_theme_option('homepage_jumbotron_section_1_title_icon'));
  ($jumbotronSection1Title1 = get_theme_option('homepage_jumbotron_section_1_title_1'));
  ($jumbotronSection1Title2 = get_theme_option('homepage_jumbotron_section_1_title_2'));
  ($jumbotronSection1Info = get_theme_option('homepage_jumbotron_section_1_info'));
  ($jumbotronSection1Link = get_theme_option('homepage_jumbotron_section_1_link'));

  ($jumbotronSection2BackgroundImage = get_theme_option('homepage_jumbotron_section_2_background_image'));
  ($jumbotronSection2TitleIcon = get_theme_option('homepage_jumbotron_section_2_title_icon'));
  ($jumbotronSection2Title1 = get_theme_option('homepage_jumbotron_section_2_title_1'));
  ($jumbotronSection2Title2 = get_theme_option('homepage_jumbotron_section_2_title_2'));
  ($jumbotronSection2Info = get_theme_option('homepage_jumbotron_section_2_info'));
  ($jumbotronSection2Link = get_theme_option('homepage_jumbotron_section_2_link'));

  ($jumbotronSection3BackgroundImage = get_theme_option('homepage_jumbotron_section_3_background_image'));
  ($jumbotronSection3TitleIcon = get_theme_option('homepage_jumbotron_section_3_title_icon'));
  ($jumbotronSection3Title1 = get_theme_option('homepage_jumbotron_section_3_title_1'));
  ($jumbotronSection3Title2 = get_theme_option('homepage_jumbotron_section_3_title_2'));
  ($jumbotronSection3Info = get_theme_option('homepage_jumbotron_section_3_info'));
  ($jumbotronSection3Link = get_theme_option('homepage_jumbotron_section_3_link'));

  $jumbotronSection4BackgroundImage = get_theme_option('homepage_jumbotron_section_4_background_image');
  $jumbotronSection4TitleIcon = get_theme_option('homepage_jumbotron_section_4_title_icon');
  $jumbotronSection4Title1 = get_theme_option('homepage_jumbotron_section_4_title_1');
  $jumbotronSection4Title2 = get_theme_option('homepage_jumbotron_section_4_title_2');
  $jumbotronSection4Info = get_theme_option('homepage_jumbotron_section_4_info');
  $jumbotronSection4Link = get_theme_option('homepage_jumbotron_section_4_link');

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

<?php echo foot(); ?>
