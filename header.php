<!DOCTYPE html>
<html>
    <head>
        <title><?php bloginfo('description'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php wp_head(); ?>
    </head>

    <body>
        <div class="container">
        </div>
          <?php if( !is_page('16') ) :?>
          <div class="header-container">
            <header>
              <div class="container">
                <div class="row">
                  <div class="four columns">
                    <h1 id="normal-name"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                    <h2 id="normal-description"><?php bloginfo('description'); ?></h2>
                  </div>
                  <div class="eight columns">
                    <?php wp_nav_menu(array(
                        'menu' => 'Nav Menu',
                        'sort_column' => 'menu_order',
                        'container_class' => 'nav-menu-header'
                    ));?>
                  </div>
                </div>
              </div>
            </header>
          </div>
          <?php endif;?>
        <div class="container">
<!-- END OF HEADER - BEGIN SECTION CONTENT -->
