<?php

//General theme Support, Enables block editor support for widgets 

function mytheme_setup()
{
    add_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'mytheme_setup');

//Enqueue Styles
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

function burger_menu_icon_scripts(){
  // hamburger icon change to X or arrow
    wp_enqueue_script(
      'menu-toggle-script',
      get_template_directory_uri() . '/js/menu.js',
      array(),
      null,    //no version
      false
    );
}
add_action('wp_enqueue_scripts', 'burger_menu_icon_scripts');



// add studyroom widget 
function need_studyroom_init()
{

  register_sidebar(array(
    'name'          => 'Custom Studyroom Widget Area',
    'id'            => 'custom-studyroom-widget',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="custom-studyroom-widget">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'need_studyroom_init');

// Enqueue Feedback Scripts

function enqueue_feedback_scripts()
{

    wp_enqueue_script(
        'feedback-js',
        get_template_directory_uri() . '/js/feedback.js',
        array('bootstrap-js'),
        false,
        true // load in footer
    );
}
add_action('wp_enqueue_scripts', 'enqueue_feedback_scripts');

// Enqueue Bootstrap Styles,Scripts and Icons
function load_bootstrap_and_icons()
{
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_style('bootstrap-icons', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.css');
}
add_action('wp_enqueue_scripts', 'load_bootstrap_and_icons');
