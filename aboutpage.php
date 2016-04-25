<?php
/*
Template name: Aboutpage Template
*/
?>
<?php get_header(); ?>

  <div class="main">
    <section class="row">
      <div class="twelve columns">
        <div class="banner-img">
          <img src="<?php bloginfo('template_directory'); ?>/img/about_img.jpg" alt="About"/>
        </div>
      </div>
    </section>
    <section class="row" id="info">
      <div class="four columns">
        <h3>About</br>the</br>Shop</h3>
      </div>
      <div class="eight columns">
        <p>Slick’s Auto Body was founded in 1982 by George Herndon and his son, Robert in Durnsville, Indiana. What was once a small shop has grown into four large auto body shops serving the entire state of Indiana. We specialize in collision repair and auto body painting, but we also handle routine maintenance, such as tire replacement and oil checks, on all vehicles. Visit us today to see what we can do for you.</p>
      </div>
    </section>
    <section class="row" id="sections">
      <div class="three columns" id="info-column">
        <img src="<?php bloginfo('template_directory'); ?>/img/car.png" alt="Car Icon"/>
        <p>In an accident? Slick’s collision repair services will make your car look and feel brand new. We are also certified to handle insurance claims for all major insurance companies. For your convenience, we have rental cars available through Enterprise and Hertz, putting you back in the driver’s seat while your car is with us.</p>
      </div>
      <div class="three columns" id="info-column">
        <img src="<?php bloginfo('template_directory'); ?>/img/screw.png" alt="Screw Icon"/>
        <p>Interested in installing a new sound system or upgrading old and tired rims? Slick’s can help you with all of your dream car needs. Our mechanics are AoCR and SSF certified, meaning they have the tools necessary to handle the installation and wiring of any car upgrade. Call us today to see the upgrades available.</p>
      </div>
      <div class="three columns" id="info-column">
        <img src="<?php bloginfo('template_directory'); ?>/img/paintbrush.png" alt="Paintbrush Icon" id="img-special"/>
        <p>Whether a fresh coat of paint is necessary for repair reasons, or you just want to try out a new and fun color, Slick’s has you covered. Our specialist has over 30 years of experience and is up to date on all the new trends in paint design. Additionally, all paint jobs at Slick's carry a lifetime guarantee.</p>
      </div>
      <div class="three columns" id="info-column">
        <img src="<?php bloginfo('template_directory'); ?>/img/wrench.png" alt="Wrench Icon"/>
        <p>Slick’s knows the reason most people visit auto shops is for routine maintenance. With so many mechanics in town, it is difficult to know where to go. That is why Slick’s has the best deals for routine maintenance. Visit our promotions page to see why we were voted #1 in Routine Maintenance in Indiana Car Weekly.</p>
      </div>
    </section>
  </div>

<?php get_footer(); ?>
