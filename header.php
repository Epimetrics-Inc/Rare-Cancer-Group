<?php
/* Header */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <title>Rare Cancers Philippines</title> -->

  <!-- Once we have more info on RCPH, will uncomment these -->
  <!-- <meta name="description" content=""> -->
  <!-- <link rel="canonical" href=""> -->

  <!-- Facebook meta tags -->
  <!-- <meta property="og:url" content=""> -->
  <!-- <meta property="og:description" content=""> -->
  <!-- <meta property="og:title" content=""> -->

  <!-- Twitter card meta tags -->
  <!-- <meta property="twitter:url" content=""> -->
  <!-- <meta property="twitter:card" content="summary"> -->
  <!-- <meta property="twitter:title" content=""> -->
  <!-- <meta property="twitter:description" content=""> -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <!-- <a class="brand" href="#" rel="home"></a> -->
    <?php if( has_custom_logo() ): ?>
      <div class="brand"><?php the_custom_logo(); ?></div>
    <?php endif; ?>
    <label for="show-menu" class="show-menu"><span class="blue outlined button">MENU</span></label>
    <input type="checkbox" id="show-menu" role="button">
    <!-- <ul class="navigation">
      <li class="nav-item"><a href="about-us.html">About Us</a></li>
      <li class="nav-item"><a href="resources.html">Resources</a></li>
      <li class="nav-item"><a href="contact.html">Get In Touch</a></li>
      <li class="nav-item"><a href="#" id="search">Search</a></li>
      <li id="search-container">
        <form action="search-results.html" id="search-form" class="search-field">
          <input type="text" name="search_keyword" id="search_keyword" placeholder="Search for something..."><a href="#" class="search-trigger"><i class="fa fa-search"></i></a>
        </form>
      </li>
    </ul> -->

    <?php if( has_nav_menu( 'primary' ) ): ?>
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'menu_class' => 'navigation',
            'container' => '',
          )
        );
      ?>
    <?php endif; ?>
  </header>