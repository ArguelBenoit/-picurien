<ul class="list-info">
  <li>
    <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;<?php the_time('d/m/Y') ?>
  </li>
  <?php
    $commentActivated = comments_open();
    if ( $commentActivated ) : ?>
      <li class="displaying-small-screen">
        <i class="fa fa-comment-o" aria-hidden="true"></i>&nbsp;<?php comments_number( '0 commentaire', '1 commentaire', '% commentaires' ); ?>
      </li>
  <?php endif; ?>
  <!-- <li class="displaying-small-screen">
    <i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;<?php the_author(); ?>
  </li> -->
  <?php
    $categories_list = get_the_category_list( __( ', ', 'epicurien' ) );
    if ( $categories_list) : ?>
      <li>
        <?php echo '<i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;' . $categories_list; ?>
      </li>
  <?php
    endif;
    $hasTags = Has_tag();
    if ( $hasTags ) :
  ?>
    <li class="displaying-small-screen">
      <i class="fa fa-tags" aria-hidden="true"></i>&nbsp;<?php the_tags(''); ?>
    </li>
  <?php endif; ?>
</ul>
