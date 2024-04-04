<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>

  <header class="header py-5 encabezado">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-4 col-8 mb-4 mb-md-0">
          <a href="<?php echo esc_url(home_url('/')) ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="img-fluid" />
          </a>
        </div>
        <div class="col-12 col-md-8">
          <nav class="navbar navbar-expand-md navbar-light justify-content-center">
            <button class="navbar-toggler mb-4" data-toggle="collapse" data-target="#nav_principal"
              aria-expanded="false" type="button">
              <span class="navbar-toggler-icon"></span>
            </button>

            <?php

            $args = array(
              'menu_class' => 'nav nav-justified flex-column flex-md-row text-center  justify-content-lg-end',
              'container_id' => 'nav_principal',
              'container_class' => 'collapse navbar-collapse justify-content-center  justify-content-lg-end text-uppercase',
              'theme_location' => 'menu_principal'
            );

            wp_nav_menu($args);

            ?>

          </nav>
        </div>
      </div>
    </div>
  </header>