

<div id="leftpanel">
  <div class="container">
    <!-- header -->
    <section class="leftpanel-section header">
       <h1>
         <a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>
       </h1>
       <p>
          <?php bloginfo('description'); ?>
       </p>
       <div class="main-menu">
         <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
       </div>
    </section>
    <!-- end -->
    <!-- search form -->
      <?php get_template_part('searchform'); ?>
    <!-- end -->
    <!-- widgets zone -->
    <section id="widgets-zone" class="leftpanel-section">
      <?php dynamic_sidebar('widgets-zone'); ?>
    </section>
    <!-- end -->
  </div>
</div>
