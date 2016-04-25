<?php
/*
Template name: Homepage Template
*/
?>
<?php get_header(); ?>

</div>

<div id="homepage">

  <section class="row">
      <h1 id="homepage-name"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
      <h2 id="homepage-description"><?php bloginfo('description'); ?></h2>
  </section>

  <section class="row">
      <?php wp_nav_menu(array(
        'menu' => 'Nav Menu',
        'sort_column' => 'menu_order',
        'container_class' => 'blank-menu-header'
      ));?>
  </section>

</div>

<div class="container">

<?php get_footer(); ?>
