<!DOCTYPE html>
<html>
  <head>
  <?php wp_head(); ?>
<!--   <link
      href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700"
      rel="stylesheet"
    /> -->
<!--     <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
      rel="stylesheet"
    />
 -->
<!--     <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
      rel="stylesheet"
    /> -->

<!--   <link
    rel="stylesheet"
    type="text/css"
    href="fonts/font-awesome/css/font-awesome.css"
  /> -->

  <!-- leaflet -->
  <link
  rel="stylesheet"
  href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""
  />
  </head>
  <body>
  <!-- Navigation
  ==========================================-->
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button
          type="button"
          class="navbar-toggle collapsed"
          data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1"
        >
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span> <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="<?php echo site_url('index.php/#page-top'); ?>"
          >Pizzeria le Spot</a
        >
        <!-- <img src="img/logospot.png" alt="" /> -->
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url(); ?>" class="page-scroll">Accueil</a></li>
          <li><a href="<?php echo site_url('/index.php/a-propos'); ?>" class="page-scroll">A Propos</a></li>
          <!-- <li>
            <a href="./index.php/#restaurant-menu" class="page-scroll">Nos Pizzas</a>
          </li>
          <li><a href="./index.php/#portfolio" class="page-scroll">Photos</a></li> -->
          <li><a href="<?php echo site_url('/index.php/actu') ?>" class="page-scroll">Actu</a></li>

          <!-- <li><a href="#team" class="page-scroll">L'équipe</a></li> -->
          <!-- <li><a href="./index.php/#call-reservation" class="page-scroll">Contact</a></li> -->
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
  </nav>
