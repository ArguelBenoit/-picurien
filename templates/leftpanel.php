

<div class="leftpanel mCustomScrollbar">
  <div class="container">
    <!-- header -->
    <section class="leftpanel-section header">
      <?php $header_image = get_header_image();
      if ( ! empty( $header_image ) ) { ?>
        <div class="img-header" style="background-image: url(<?php header_image(); ?>);"></div>
      <?php } ?>
     <h1>
       <a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>
     </h1>
     <hr>
     <p>
        <?php bloginfo('description'); ?>
     </p>
     <hr>
     <div class="main-menu">
       <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
     </div>
    </section>
    <!-- end -->
    <!-- search form -->
      <?php get_template_part('templates/searchform'); ?>
    <!-- end -->
    <!-- widgets zone -->
    <section id="widgets-zone" class="leftpanel-section">
      <?php dynamic_sidebar('widgets-zone'); ?>
    </section>
    <!-- end -->
  </div>
</div>
