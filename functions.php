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

?>
