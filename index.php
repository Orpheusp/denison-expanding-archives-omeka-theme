<?php 
  echo head();
  function themeOptions($optionName) {
    $themeOptionPrefix1 = 'homepage_jumbotron_section_1_';
    $themeOptionPrefix2 = 'homepage_jumbotron_section_2_';
    $themeOptionPrefix3 = 'homepage_jumbotron_section_3_';
    $themeOptionPrefix4 = 'homepage_jumbotron_section_4_';
    
    return array(
      get_theme_option($themeOptionPrefix1.$optionName),
      get_theme_option($themeOptionPrefix2.$optionName),
      get_theme_option($themeOptionPrefix3.$optionName),
      get_theme_option($themeOptionPrefix4.$optionName)
    );
  }

  $themeUploadsPath = '/files/theme_uploads/';
  $sectionBackgroundImages = themeOptions('background_image');
  $sectionTitleIcons = themeOptions('title_icon');
  $sectionTitle1s = themeOptions('title_1');
  $sectionTitle2s = themeOptions('title_2');
  $sectionInfos = themeOptions('info');
  $sectionLinks = themeOptions('link');
?>

<?php
  function showIntro() {
    $themeOption = 'homepage_introduction_content';
    $introContent = get_theme_option($themeOption);
    
    echo __($introContent);
  }
?>

<div class="container-fluid highlight-jumbotron">
  
  <div class="col-lg-4 col-lg-push-4 col-md-12 homepage-intro">
    <div class="homepage-logo">
      <p class="sans-serif-800">EXPANDING</p>
      <p class="serif-400">ARCHIVE</p>
    </div>
    <p class="serif-400"><?php showIntro() ?></p>
  </div>
  
  <div class="col-lg-4 col-lg-pull-4 col-md-6 col-sm-12">
    <!-- section 1 -->
    <div class="section">
      <?php if (!empty($sectionBackgroundImages[0])): ?>
        <img src="<?php echo $themeUploadsPath.$sectionBackgroundImages[0] ?>" class="background">
      <?php else: ?>
        <div class="background"></div>
      <?php endif ?>
      
      <div class="front">
        <div class="container">
          <span class="glyphicon <?php echo $sectionTitleIcons[0] ?>" aria-hidden="true"></span>
          <p class="sans-serif-800"><?php echo $sectionTitle1s[0] ?></p>
          <p class="serif-400"><?php echo $sectionTitle2s[0] ?></p>
        </div>
      </div>

      <div class="back">
        <p><?php echo $sectionInfos[0] ?></p>
        <a href="<?php echo $sectionLinks[0] ?>">LEARN MORE</a>
      </div>
    </div>
    
    <!-- section 2 -->
    <div class="section">
    <?php if (!empty($sectionBackgroundImages[1])): ?>
      <img src="<?php echo $themeUploadsPath.$sectionBackgroundImages[1] ?>" class="background">
    <?php else: ?>
      <div class="background"></div>
    <?php endif ?>

      <div class="front">
        <div class="container">
          <span class="glyphicon <?php echo $sectionTitleIcons[1] ?>" aria-hidden="true"></span>
          <p class="sans-serif-800"><?php echo $sectionTitle1s[1] ?></p>
          <p class="serif-400"><?php echo $sectionTitle2s[1] ?></p>
        </div>
      </div>

      <div class="back">
        <p><?php echo $sectionInfos[1] ?></p>
        <a href="<?php echo $sectionLinks[1] ?>">LEARN MORE</a>
      </div>
    </div>
    
  </div>  
  
  <div class="col-lg-4 col-md-6 col-sm-12">
    <!-- section 3 -->
    <div class="section">
    <?php if (!empty($sectionBackgroundImages[2])): ?>
      <img src="<?php echo $themeUploadsPath.$sectionBackgroundImages[2] ?>" class="background">
    <?php else: ?>
      <div class="background"></div>
    <?php endif ?>

      <div class="front">
        <div class="container">
          <span class="glyphicon <?php echo $sectionTitleIcons[2] ?>" aria-hidden="true"></span>
          <p class="sans-serif-800"><?php echo $sectionTitle1s[2] ?></p>
          <p class="serif-400"><?php echo $sectionTitle2s[2] ?></p>
        </div>
      </div>

      <div class="back">
        <p><?php echo $sectionInfos[2] ?></p>
        <a href="<?php echo $sectionLinks[2] ?>">LEARN MORE</a>
      </div>
    </div>
    
    <!-- section 4 -->
    <div class="section">
    <?php if (!empty($sectionBackgroundImages[3])): ?>
      <img src="<?php echo $themeUploadsPath.$sectionBackgroundImages[3] ?>" class="background">
    <?php else: ?>
      <div class="background"></div>
    <?php endif ?>

      <div class="front">
        <div class="container">
          <span class="glyphicon <?php echo $sectionTitleIcons[3] ?>" aria-hidden="true"></span>
          <p class="sans-serif-800"><?php echo $sectionTitle1s[3] ?></p>
          <p class="serif-400"><?php echo $sectionTitle2s[3] ?></p>
        </div>
      </div>

      <div class="back">
        <p><?php echo $sectionInfos[3] ?></p>
        <a href="<?php echo $sectionLinks[3] ?>">LEARN MORE</a>
      </div>
    </div>

  </div>
</div>

<?php echo foot(array('displayFooter' => false)); ?>
