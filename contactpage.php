<?php
/*
Template name: Contactpage Template
*/
?>

<?php get_header(); ?>

  <div class="main">
    <section class="row">
      <div class="twelve columns">
        <div class="banner-img">
          <img src="<?php bloginfo('template_directory'); ?>/img/contact-banner.jpg" alt="Contact"/>
        </div>
      </div>
    </section>
    <section class="row" id="info">
      <div class="four columns">
        <h3>Contact</br>Slick's</br>Today</h3>
      </div>
      <div class="eight columns">
        <p>Slick’s Auto Body is easy to contact using any method. For personalized service at your local Slick’s, please visit the locations page for in depth information for that shop. For general questions, you can contact us using the below information. All Slick’s shops have the same pricing and promotions, so any quote or information you get from one Slick’s will be valid at any Slick’s. We hope to hear from you soon!</p>
      </div>
    </section>
    <section class="row" id="sections">
      <div class="three columns" id="info-column">
        <img src="<?php bloginfo('template_directory'); ?>/img/location-01.png" alt="Location Icon"/>
        <p>Flagship Shop:</br>Durnsville, Indiana</p>
      </div>
      <div class="three columns" id="info-column">
        <img src="<?php bloginfo('template_directory'); ?>/img/fax-01.png" alt="Fax Icon"/>
        <p>Fax Number:</br>(837) 229-3234</p>
      </div>
      <div class="three columns" id="info-column">
        <img src="<?php bloginfo('template_directory'); ?>/img/email-01.png" alt="Email Icon" />
        <p>Email Address:</br>email@Slicks.com</p>
      </div>
      <div class="three columns" id="info-column">
        <img src="<?php bloginfo('template_directory'); ?>/img/phone.png" alt="Phone Icon"/>
        <p>Phone Number:</br>(317) 386-3083</p>
      </div>
    </section>
  </div>

<?php get_footer(); ?>
