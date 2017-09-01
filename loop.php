
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

						<div class="row main">
							<span class="article-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</span>
              <hr style="width: <?php echo(rand(40,180)); ?>px"/>
							<div class="article-content">
								<?php the_excerpt(); ?>
							</div>
						</div>
						<div class="row secondary">
							<span class="date">
								<?php the_time('d/m/Y') ?>
							</span>
							<span class="comment">
								<?php comments_number( '0', '1', '%' ); ?>
								<i class="fa fa fa-comments" aria-hidden="true"></i>
							</span>
							<?php
								$categories_list = get_the_category_list( __( ', ', 'epicurien' ) );
								if ( $categories_list) :
							?>
								<span class="category">
									<?php echo $categories_list . '&nbsp;&nbsp;<i class="fa fa-folder"></i>&nbsp;&nbsp;|&nbsp;'; ?>
								</span>
							<?php endif; ?>
						</div>


					</div>

				</div>

    	<?php
  	endwhile;
	endif;
?>
