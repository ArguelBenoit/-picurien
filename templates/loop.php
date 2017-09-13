
<?php
  if (have_posts()) :
    while (have_posts()) :
      the_post(); ?>

				<div class="row article" href="<?php the_permalink(); ?>">

					<?php if(has_post_thumbnail()) { ?>
						<div class="thumbnail">
							<?php the_post_thumbnail('medium'); ?>
						</div>
					<?php } else { ?>
            <div class="thumbnail"></div>
					<?php } ?>

					<div class="content">
            <div class="row">
  						<a class="title-article" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <?php get_template_part('templates/list-info'); ?>
					  </div>
					</div>

				</div>

    	<?php
  	endwhile;
	endif;
?>
