<?php echo head(); ?>

<?php
  ($backgroundColor = get_theme_option('background_color')) || ($backgroundColor = "#FFFFFF");
  ($textColor = get_theme_option('text_color')) || ($textColor = "#444444");
  ($linkColor = get_theme_option('link_color')) || ($linkColor = "#888888");
  ($buttonColor = get_theme_option('button_color')) || ($buttonColor = "#000000");
  ($buttonTextColor = get_theme_option('button_text_color')) || ($buttonTextColor = "#FFFFFF");
  ($titleColor = get_theme_option('header_title_color')) || ($titleColor = "#000000");
?>

<div class="container-fluid highlight-jumbotron">
  <div class="col-md-6">
    <div class="section">
      <img src="./images/featured-item-5.jpg" class="background">
      <div class="front">
        <div class="container">
          <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
          <p class="sans-serif-800">ABOUT</p>
          <p class="serif-400">THE PROJECT</p>
        </div>
      </div>
      <div class="back">
        <p>Lorem ipsum dolor sit amet, id vel brute inermis consulatu, te sit atqui harum. Vix cu causae legimus. No tota eius fabulas sed, an virtute nusquam dissentiet sed, in eum integre molestie ocurreret. Ut pri errem dicam bonorum, vim in omittam persequeris reprehendunt. Eos doctus phaedrum no, in tempor definitionem eos.</p>
        <a>LEARN MORE</a>
      </div>
    </div>
    <div class="section">
      <img src="./images/featured-item-1.jpg" class="background">
      <div class="front">
        <div class="container">
          <span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
          <p class="sans-serif-800">STUDENT & FACULTY</p>
          <p class="serif-400">SCHOLARSHIP</p>
        </div>
      </div>
      <div class="back">
        <p>Lorem ipsum dolor sit amet, id vel brute inermis consulatu, te sit atqui harum. Vix cu causae legimus. No tota eius fabulas sed, an virtute nusquam dissentiet sed, in eum integre molestie ocurreret. Ut pri errem dicam bonorum, vim in omittam persequeris reprehendunt. Eos doctus phaedrum no, in tempor definitionem eos.</p>
        <a>LEARN MORE</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="section">
      <img src="./images/featured-item-6.jpg" class="background">
      <div class="front">
        <div class="container">
          <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
          <p class="sans-serif-800">DENISON'S</p>
          <p class="serif-400">QUEER STUDIES CONCENTRATION</p>
        </div>
      </div>
      <div class="back">
        <p>Lorem ipsum dolor sit amet, id vel brute inermis consulatu, te sit atqui harum. Vix cu causae legimus. No tota eius fabulas sed, an virtute nusquam dissentiet sed, in eum integre molestie ocurreret. Ut pri errem dicam bonorum, vim in omittam persequeris reprehendunt. Eos doctus phaedrum no, in tempor definitionem eos.</p>
        <a>LEARN MORE</a>
      </div>
    </div>
    <div class="section">
      <img src="./images/featured-item-4.jpg" class="background">
      <div class="front">
        <div class="container">
          <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
          <p class="sans-serif-800">INSTITUTIONAL</p>
          <p class="serif-400">HISTROY</p>
        </div>
      </div>
      <div class="back">
        <p>Lorem ipsum dolor sit amet, id vel brute inermis consulatu, te sit atqui harum. Vix cu causae legimus. No tota eius fabulas sed, an virtute nusquam dissentiet sed, in eum integre molestie ocurreret. Ut pri errem dicam bonorum, vim in omittam persequeris reprehendunt. Eos doctus phaedrum no, in tempor definitionem eos.</p>
        <a>LEARN MORE</a>
      </div>
    </div>
  </div>
</div>

<div class="homepage-logo">
  <p class="sans-serif-800">EXPANDING</p>
  <p class="serif-400">ARCHIVE</p>
</div>

<?php echo foot(); ?>
