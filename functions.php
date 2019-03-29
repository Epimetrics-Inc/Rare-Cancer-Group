<?php
/* Rare Cancers PH functions and definitions */

/* Setup site */
function rare_cancers_ph_setup() {
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'responsive-embeds' );
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 1568, 9999 );

  add_theme_support('html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );

  add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 100,
    'flex-height' => true,
    'flex-width'  => true,
  ) );

  register_nav_menus(
    array(
      'primary' => __( 'Primary Menu', 'rare-cancers-ph' ),
      'sitemap' => __( 'Sitemap Links', 'rare-cancers-ph' ),
    )
  );
}
add_action( 'after_setup_theme', 'rare_cancers_ph_setup' );

function rare_cancers_ph_scripts() {
  // load FontAwesome
  wp_enqueue_style('asset-fontawesome-css', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
  // load LightSlider CSS
  wp_enqueue_style( 'rare_cancers_ph-lightslider-css', get_theme_file_uri( '/assets/lightslider/css/lightslider.css' ) );
  // load stylesheet
  wp_enqueue_style( 'rare_cancers_ph-style', get_stylesheet_uri() );

  // load LightSlider JS
  wp_enqueue_script( 'rare_cancers_ph-lightslider-js', get_theme_file_uri( 'assets/lightslider/js/lightslider.js' ), array( 'jquery' ), '3.3.1', true );
  // load JS
  wp_enqueue_script( 'rare_cancers_ph-js', get_theme_file_uri( 'main.js' ), array( 'jquery' ), '3.3.1', true );
}
add_action( 'wp_enqueue_scripts', 'rare_cancers_ph_scripts' );

// Adding search menu to Primary Menu
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);
function add_search_form($items, $args) {
  $search_text = "";
  if( $args->theme_location == 'primary' )
        $items .= '<li class="menu-item"><a href="#" id="search">Search</a></li><li class="search-container"><form role="search" method="get" id="searchform" action="'.home_url( '/' ).'" class="search-field"><input type="text" value="'.$search_text.'" name="s" id="s" placeholder="Search for something..." onblur="if (this.value == \'\') {this.value ='.$search_text.'};" /><i class="fa fa-search"></i><input type="hidden" id="searchsubmit" /></form></li>';
        return $items;
}