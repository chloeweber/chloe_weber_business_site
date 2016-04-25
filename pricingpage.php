<?php
/*
Template name: Pricingpage Template
*/
?>

<?php get_header(); ?>

  <div class="main">
    <section class="row">
      <div class="twelve columns">
        <div class="banner-img">
          <img src="<?php bloginfo('template_directory'); ?>/img/pricing-banner.jpg" alt="Pricing"/>
        </div>
      </div>
    </section>
    <section class="row" id="info">
      <div class="four columns">
        <h3>Our</br>Pricing</br>Plans</h3>
      </div>
      <div class="eight columns">
        <p>Whether you are on a budget or ready for that dream car you’ve always wanted, Slick’s has the pricing plan for you. While individual jobs must be priced in person, Slick’s has a few packages available that will makeover your car. Each package is a flat rate; the price will not go up or down depending on the make or year of the car. Additionally, each package that goes up in price includes all of the services in the previous, less expensive packages.</p>
      </div>
    </section>
    <section class="row" id="sections">
      <div class="three columns" id="info-column">
        <img src="<?php bloginfo('template_directory'); ?>/img/value-01.png" alt="Value Icon"/>
        <p>Value Package: $250</br>This package comes with an oil change, fluid change, air conditioning tune-up, engine diagnostic service, tire rotation, light bulb replacement and wiper blade replacement. This package is perfect for anyone looking to tune up a car without making noticeable cosmetic changes.</p>
      </div>
      <div class="three columns" id="info-column">
        <img src="<?php bloginfo('template_directory'); ?>/img/good.png" alt="Good Icon"/>
        <p>Good Package: $500</br>This package comes with all services from the Value Package, as well as four new tires, interior conditioning, premium exterior wax and break pad replacement. This package will make your car look as good as new, as well as drive as good as new. It is perfect for anyone doing a 5 year maintenance.</p>
      </div>
      <div class="three columns" id="info-column">
        <img src="<?php bloginfo('template_directory'); ?>/img/great-01.png" alt="Great Icon"/>
        <p>Better Package: $750</br>This package comes with all services from the Value Package and the Good Package, as well as minor paint fixes (up to an inch in diameter) and minor dent fixes (up to two inches in diameter). This package is perfect for anyone wanting to fix those pesky marks without the intensity of a full paint job.</p>
      </div>
      <div class="three columns" id="info-column">
        <img src="<?php bloginfo('template_directory'); ?>/img/best-01.png" alt="Best Icon"/>
        <p>Best Package: $1000</br>This package comes with all services from the Value Package, Good Package and Better Package, as well as a full paint job. This is the perfect package for someone looking for a new car, without the price of one. The full paint job will cover up any major cosmetic issues.</p>
      </div>
    </section>
  </div>

<?php get_footer(); ?>
