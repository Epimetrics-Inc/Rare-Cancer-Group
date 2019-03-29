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
  register_sidebar(
    array( // About Us Excerpt, found in Home Page
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

// Adding Different sections to the different parts of the RCPH site
if( function_exists('acf_add_local_field_group') ) {
  acf_add_local_field_group(
    array(
      // adding About Us Excerpt to Home Page
      'key' => 'group_5c9e009004ac7',
      'title' => 'About Us - Home Page',
      'fields' => array(
        array(
          'key' => 'field_5c9e0095905d1',
          'label' => 'About Us Description',
          'name' => 'about_us_description',
          'type' => 'textarea',
          'instructions' => 'Write a quick excerpt on what Rare Cancers Philippines is. Should be about 3 lines minimum and 5 lines maximum.',
          'required' => 1,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => 'about-excerpt',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'maxlength' => '',
          'rows' => '',
          'new_lines' => 'wpautop',
        ),
        array(
          'key' => 'field_5c9e010b905d2',
          'label' => 'RCPH Preview Images',
          'name' => 'rcph_preview_images',
          'type' => 'image',
          'instructions' => 'Upload at least one image that shows what Rare Cancer Philippines is all about.',
          'required' => 1,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => 'about-preview',
            'id' => '',
          ),
          'return_format' => 'array',
          'preview_size' => 'thumbnail',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
      ),
      'location' => array(
        array(
          array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'post',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => array(
        0 => 'permalink',
        1 => 'the_content',
        2 => 'excerpt',
        3 => 'discussion',
        4 => 'comments',
        5 => 'revisions',
        6 => 'slug',
        7 => 'author',
        8 => 'format',
        9 => 'page_attributes',
        10 => 'featured_image',
        11 => 'categories',
        12 => 'tags',
        13 => 'send-trackbacks',
      ),
      'active' => true,
      'description' => '',
    )
  );
}