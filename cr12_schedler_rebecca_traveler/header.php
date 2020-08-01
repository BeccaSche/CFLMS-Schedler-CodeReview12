<!DOCTYPE html>
<html>
<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <meta name="description" content="<?php bloginfo('description'); ?>">
   <title><?php bloginfo('name'); ?></title>

   <?php wp_head(); ?>
  
</head>

<body>
  <header>
    <div class="colorStripe d-flex justify-content-end p-2">
      <?php
      if(is_active_sidebar('sidebar')):
     dynamic_sidebar('header_social');
     endif;  
?>
    </div>

    <div class="headerImage d-flex justify-content-center py-3">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Mount_logo.png" alt="logo" style="width:30vw">
    </div>

    <div class="d-flex justify-content-center">
      <nav class="navbar navbar-expand-lg navbar-light" role="navigation">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        </div>
      </nav>
    </div>
  </head>

  <main>