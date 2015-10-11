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

  ($jumbotronSection4BackgroundImage = get_theme_option('homepage_jumbotron_section_4_background_image'));
  ($jumbotronSection4TitleIcon = get_theme_option('homepage_jumbotron_section_4_title_icon'));
  ($jumbotronSection4Title1 = get_theme_option('homepage_jumbotron_section_4_title_1'));
  ($jumbotronSection4Title2 = get_theme_option('homepage_jumbotron_section_4_title_2'));
  ($jumbotronSection4Info = get_theme_option('homepage_jumbotron_section_4_info'));
  ($jumbotronSection4Link = get_theme_option('homepage_jumbotron_section_4_link'));
  
  ($themeUploadsPath = '/files/theme_uploads/');
?>

<div class="container-fluid highlight-jumbotron">
  <div class="col-md-6">
    <div class="section">
      <img src="<?php echo $themeUploadsPath . $jumbotronSection1BackgroundImage; ?>" class="background">
      <div class="front">
        <div class="container">
          <span class="glyphicon <?php echo $jumbotronSection1TitleIcon; ?>" aria-hidden="true"></span>
          <p class="sans-serif-800"><?php echo $jumbotronSection1Title1; ?></p>
          <p class="serif-400"><?php echo $jumbotronSection1Title2; ?></p>
        </div>
      </div>
      <div class="back">
        <p><?php echo $jumbotronSection1Info; ?></p>
        <a href="<?php echo $jumbotronSection1Link; ?>">LEARN MORE</a>
      </div>
    </div><!-- end of section -->
    
    <div class="section">
      <img src="<?php echo $themeUploadsPath . $jumbotronSection2BackgroundImage; ?>" class="background">
      <div class="front">
        <div class="container">
          <span class="glyphicon <?php echo $jumbotronSection2TitleIcon; ?>" aria-hidden="true"></span>
          <p class="sans-serif-800"><?php echo $jumbotronSection2Title1; ?></p>
          <p class="serif-400"><?php echo $jumbotronSection2Title2; ?></p>
        </div>
      </div>
      <div class="back">
        <p><?php echo $jumbotronSection2Info; ?></p>
        <a href="<?php echo $jumbotronSection2Link; ?>">LEARN MORE</a>
      </div>
    </div><!-- end of section -->
  </div>
  
  <div class="col-md-6">
    <div class="section">
      <img src="<?php echo $themeUploadsPath . $jumbotronSection3BackgroundImage; ?>" class="background">
      <div class="front">
        <div class="container">
          <span class="glyphicon <?php echo $jumbotronSection3TitleIcon; ?>" aria-hidden="true"></span>
          <p class="sans-serif-800"><?php echo $jumbotronSection3Title1; ?></p>
          <p class="serif-400"><?php echo $jumbotronSection3Title2; ?></p>
        </div>
      </div>
      <div class="back">
        <p><?php echo $jumbotronSection3Info; ?></p>
        <a href="<?php echo $jumbotronSection3Link; ?>">LEARN MORE</a>
      </div>
    </div><!-- end of section -->
    
    <div class="section">
      <img src="<?php echo $themeUploadsPath . $jumbotronSection4BackgroundImage; ?>" class="background">
      <div class="front">
        <div class="container">
          <span class="glyphicon <?php echo $jumbotronSection4TitleIcon; ?>" aria-hidden="true"></span>
          <p class="sans-serif-800"><?php echo $jumbotronSection4Title1; ?></p>
          <p class="serif-400"><?php echo $jumbotronSection4Title2; ?></p>
        </div>
      </div>
      <div class="back">
        <p><?php echo $jumbotronSection4Info; ?></p>
        <a href="<?php echo $jumbotronSection4Link; ?>">LEARN MORE</a>
      </div>
    </div><!-- end of section -->
  </div>
</div>

<div class="homepage-logo">
  <p class="sans-serif-800">EXPANDING</p>
  <p class="serif-400">ARCHIVE</p>
</div>

<?php echo foot(); ?>
