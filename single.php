<?php
	get_header();
?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="container not-loop">
			<section>
				<h1>
					<?php the_title(); ?>
				</h1>
				<div class="post">
					<div class="post-content">
						<?php the_content(); ?>
					</div>
					<?php get_template_part('templates/list-info'); ?>
				</div>
			</section>
			<section>
				<?php
					$commentActivated = comments_open();
					if ( $commentActivated ) : ?>
					<div class="post-comments">
						<?php comments_template(); ?>
					</div>
				<?php endif; ?>
			</section>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php
	get_footer();
?>
