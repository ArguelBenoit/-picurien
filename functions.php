<?php

  add_action('init', 'add_main_menu');
  function add_main_menu() {
    register_nav_menu('main_menu', 'left menu');
  }

  add_action('widgets_init','add_sidebar');
  function add_sidebar() {
    register_sidebar(array(
        'id' => 'widgets-zone',
        'name' => 'left panel',
        'before_widget' => '<div class="container-widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>'
    ));
  }

  add_theme_support( 'post-thumbnails' );

  add_theme_support( 'custom-header', array(
    'height' => 400,
    'width' => 400,
    'header-selector' => '.img-header',
    'default-image'	=> get_template_directory_uri() . '/images/header.jpg',
  	'header-text' => false,
    'flex-height' => false,
    'flex-width' => false,
  ));

?>
