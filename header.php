<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php if(is_page_template('page-home.php')){ body_class('home');} else {body_class();} ?> >

<!-- Orange & Black -->
<div class="background">
  <div class="col-6"></div>
  <div class="col-6"></div>
</div>

<div id="call-us" class="call-us">
  <div class="selected">
    <span>Berlin</span>

    <ul>
      <?php if (ale_get_option('callnumber1')){?><li data-num="<?php echo ale_get_option('callnumber1');?>"><?php echo ale_get_option('location1');?></li><?php }?>
      <?php if (ale_get_option('callnumber2')){?><li data-num="<?php echo ale_get_option('callnumber2');?>"><?php echo ale_get_option('location2');?></li><?php }?>
        <?php if (ale_get_option('callnumber3')){?><li data-num="<?php echo ale_get_option('callnumber3');?>"><?php echo ale_get_option('location3');?></li><?php }?>
    </ul>
  </div>
  <div class="number">#790</div>
  <p><?php echo ale_get_option('calltoaction');?></p>
</div>

<!-- Nav -->
<nav class="main">

  <?php if (ale_get_option('sitelogo')){?>
  <a class="customlogo" href="<?php echo home_url();?>"><img src="<?php echo ale_get_option('sitelogo') ?>" ></a>
  <?php } else {?>
    <a class="logo" href="<?php echo home_url();?>"></a>
  <?php }?>

  <div class="col-6 left">
    <?php
    if (has_nav_menu('header_left_menu')) {
      wp_nav_menu(array(
          'theme_location' => 'header_left_menu',
          'menu' => 'Header Left Menu',
          'menu_class' => 'first menu menu-left cf',
          'walker' => new Aletheme_Nav_Walker(),
          'container' => '',
      ));
    }?>
    <!--<ul class="first cf">

      <li><a href="booking.html">Booking</a></li>
      <li class="dot">•</li>
      <li>
        <a href="services.html">Services</a>
        <ul class="second">
          <li><a href="services.html">Reto cab</a></li>
          <li><a href="services.html">VIP taxi</a></li>
          <li>
            <a href="services.html">Regular</a>

            <ul class="third">
              <li><a href="services.html">Reto Cab</a></li>
              <li><a href="services.html">VIP axi</a></li>
              <li><a href="services.html">Regular</a></li>
              <li><a href="services.html">Airport meeting</a></li>
            </ul>
          </li>
          <li><a href="services.html">Airport meeting</a></li>
        </ul>
      </li>
      <li class="dot">•</li>
      <li class="active"><a href="index.html">Home</a></li>
    </ul>-->
  </div>
  <div class="col-6 right">
      <?php
      if (has_nav_menu('header_right_menu')) {
          wp_nav_menu(array(
              'theme_location' => 'header_right_menu',
              'menu' => 'Header Right Menu',
              'menu_class' => 'first menu menu-right cf',
              'walker' => new Aletheme_Nav_Walker(),
              'container' => '',
          ));
      }?>
    <!--<ul class="first cf">
      <li class="dot show-tablet">•</li>
      <li>
        <a href="blog.html">Blog</a>
        <ul class="second">
          <li><a href="blog.html">News</a></li>
          <li><a href="blog.html">Sport</a></li>
          <li><a href="blog-inside.html">Single</a></li>
        </ul>
      </li>
      <li class="dot">•</li>
      <li><a href="about.html">About</a></li>
      <li class="dot">•</li>
      <li><a href="contact.html">Contact</a></li>
    </ul>-->
  </div>

  <!-- -->
  <a href="#" class="mobile-button">Menu</a>
  <ul class="mobile-menu">
    <li><a href="index.html">Home</a></li>
    <li>
      <a>Services</a>
      <ul class="second">
        <li><a href="services.html">Services</a></li>
        <li><a href="services.html">VIP taxi</a></li>
        <li>
          <a href="services.html">Regular</a>
          <ul class="third">
            <li><a href="services.html">Reto Cab</a></li>
            <li><a href="services.html">VIP axi</a></li>
            <li><a href="services.html">Regular</a></li>
            <li><a href="services.html">Airport meeting</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="booking.html">Booking</a></li>
    <li>
      <a>Blog</a>
      <ul class="second">
        <li><a href="blog.html">Blog</a></li>
        <li><a href="blog.html">News</a></li>
        <li><a href="blog.html">Sport</a></li>
        <li><a href="blog-inside.html">Single</a></li>
      </ul>
    </li>
    <li><a href="about.html">About</a></li>
    <li><a href="contact.html">Contact</a></li>
  </ul>

  <!-- Search -->

  <div class="search-button"></div>

  <?php echo get_search_form();?>

</nav>

<?php if (is_page_template('page-home.php')){?>

<!-- Header only for HomePage -->
<header class="wrap cf">
  <div class="col-6 left">
    <div class="text">
      <h2>
        There are many
        variations passages
      </h2>
      <p>
        There are many variations of passages of Lorem <br/>
        psum available, but the majority
      </p>

      <img class="car" src="css/images/car.png" alt=""/>
    </div>

  </div>
  <div class="col-6 right">

    <div class="text">

      <div class="cf">
        <div class="col-2">&nbsp;</div>
        <div class="col-10">
          <h2>Book a cab</h2>
        </div>
      </div>

      <!-- Form -->
      <form action="#" class="book-a-cab">

        <!-- -->
        <div class="cf">
          <div class="col-2">
            <label for="name">Name:</label>
            <label for="phone">Phone:</label>
          </div>
          <div class="col-10">
            <input id="name" type="text"/>
            <input id="phone" type="text"/>
          </div>
        </div>

        <div class="cf adress">
          <div class="col-2">
            <p>Adress:</p>
          </div>
          <div class="col-10">
            <a href="#" class="map">Chose on map</a>
            <p>London, 8417 Parker Rd</p>
          </div>
        </div>

        <!-- -->
        <div class="cf type">
          <div class="col-2">
            <p>Type:</p>
          </div>
          <div class="col-10">
            <div id="form-type">
              <a class="personal" href="#">Personal</a>
              <a class="budget" href="#">Budget</a>
              <a class="airport" href="#">Airport</a>
              <a class="truck" href="#">Truck</a>
            </div>

            <input type="submit" id="submit" value="Done"/>
          </div>
        </div>
      </form>

    </div>

  </div>
</header>

<?php }



