<?php

function mytheme_setup() {
    add_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );

function add_theme_style()
{

  wp_enqueue_style('style', get_template_directory_uri() . '/css/mystyle.css', false, '1.1', 'all');
}
add_action('wp_enqueue_scripts', 'add_theme_style');


function add_favicon()
{
  echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_template_directory_uri() . '/favicon.png" />';
}

add_action('wp_head', 'add_favicon');


function wpb_custom_new_menu()
{
  register_nav_menus(
    array(
      'my-custom-menu' => __('My Custom Menu'),
      'extra-menu' => __('Extra Menu')
    )
  );
}
add_action('init', 'wpb_custom_new_menu');

// ///////////////////////////////// A widget function //////////////////

function new_widgets_init()
{

  register_sidebar(array(
    'name'          => 'Custom Header Widget Area',
    'id'            => 'custom-header-widget',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="new-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'new_widgets_init');

function button_widgets_init()
{

  register_sidebar(array(
    'name'          => 'Custom Button Widget Area',
    'id'            => 'custom-button-widget',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="category-button">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'button_widgets_init');

function need_help_widgets_init()
{

  register_sidebar(array(
    'name'          => 'Custom Need Help Widget Area',
    'id'            => 'custom-need-help-widget',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="custom-need-help-widget">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'need_help_widgets_init');

function need_classroom_init()
{

  register_sidebar(array(
    'name'          => 'Custom Classroom Widget Area',
    'id'            => 'custom-classroom-widget',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="custom-classroom-widget">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'need_classroom_init');


function way_finder_heading_scripts()
{

  wp_enqueue_script('way-finder-heading-welcome', get_template_directory_uri() . '/js/welcome.js', array(), '1.0.0', false);
}
add_action('wp_enqueue_scripts', 'way_finder_heading_scripts');

function burger_menu_icon_scripts()
{
  // hamburger icon change to X or arrow
  if (is_front_page()||is_page('thank-you')) {
    wp_enqueue_script(
      'menu-toggle-script',
      get_template_directory_uri() . '/js/menu.js',
      array(),
      null,    //no virsion
      false
    );
  }
}
add_action('wp_enqueue_scripts', 'burger_menu_icon_scripts');
