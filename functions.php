<?php
/* Rare Cancers PH functions and definitions */

/* Setup site */
function rare_cancers_ph_setup() {
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'responsive-embeds' );
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 1568, 9999 );
  add_image_size( 'no_change_size', 0, 0, true );

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

function rare_cancers_ph_widgets_init() {
  // Home Page widgets
  // About Us Excerpt
  register_sidebar(
    array(
      'name'          => 'About Us Excerpt',
      'id'            => 'about_us_excerpt',
      'before_widget' => '<div class="about-excerpt">',
      'after_widget'  => '</div>',
    )
  );

  register_sidebar(
    array(
      'name'          => 'About Us Section Preview',
      'id'            => 'about_us_preview',
      'before_widget' => '<div class="about-preview">',
      'after_widget'  => '</div>',
    )
  );

  // Newsletter Section
  register_sidebar(
    array(
      'name'            => 'Newsletter Section Info',
      'id'              => 'newsletter_info',
      'before_widget'   => '<div class="newsletter-info">',
      'after_widget'    => '</div>',
      'before_title'    => '<h2>',
      'after_title'     => '</h2>',
    )
  );

  register_sidebar(
    array(
      'name'          => 'Newsletter Widget',
      'id'            => 'newsletter_widget',
      'before_widget' => '<div class="subscribe-to-newsletter">',
      'after_widget'  => '</div>',
    )
  );
}
add_action( 'widgets_init', 'rare_cancers_ph_widgets_init' );

// Adding search menu to Primary Menu
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);
function add_search_form($items, $args) {
  $search_text = "";
  if( $args->theme_location == 'primary' )
        $items .= '<li class="menu-item"><a href="#" id="search">Search</a></li><li class="search-container"><form role="search" method="get" id="searchform" action="'.home_url( '/' ).'" class="search-field"><input type="text" value="'.$search_text.'" name="s" id="s" placeholder="Search for something..." onblur="if (this.value == \'\') {this.value ='.$search_text.'};" /><i class="fa fa-search"></i><input type="hidden" id="searchsubmit" /></form></li>';
        return $items;
}

// Custom Taxonomies start
function rare_cancers_ph_site_locations_init() {
  // create a new taxonomy
  register_taxonomy(
    'site_locations',
    array(
      'label' => __( 'Site Locations' ),
      'rewrite' => array( 'slug' => 'site_location' ),
      'capabilities' => array(
        'assign_terms' => 'edit_tags',
        'edit_terms' => 'manage_tags'
      )
    )
  );
}
add_action( 'init', 'rare_cancers_ph_site_locations_init' );

// Custom Post Types Start
function rare_cancers_ph_custom_post_type() {
  // Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'Slides', 'Post Type General Name', 'rare-cancers-ph' ),
    'singular_name'       => _x( 'Slide', 'Post Type Singular Name', 'rare-cancers-ph' ),
    'menu_name'           => __( 'Slides', 'rare-cancers-ph' ),
    'parent_item_colon'   => __( 'Parent Slide', 'rare-cancers-ph' ),
    'all_items'           => __( 'All Slides', 'rare-cancers-ph' ),
    'view_item'           => __( 'View Slide', 'rare-cancers-ph' ),
    'add_new_item'        => __( 'Add New Slide', 'rare-cancers-ph' ),
    'add_new'             => __( 'Add New', 'rare-cancers-ph' ),
    'edit_item'           => __( 'Edit Slide', 'rare-cancers-ph' ),
    'update_item'         => __( 'Update Slide', 'rare-cancers-ph' ),
    'search_items'        => __( 'Search Slide', 'rare-cancers-ph' ),
    'not_found'           => __( 'Not Found', 'rare-cancers-ph' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'rare-cancers-ph' ),
  );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'slides', 'rare-cancers-ph' ),
        'description'         => __( 'Slide news and reviews', 'rare-cancers-ph' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'categories', 'thumbnail', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'site_locations' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'slides', $args );
}

add_action( 'init', 'rare_cancers_ph_custom_post_type' );