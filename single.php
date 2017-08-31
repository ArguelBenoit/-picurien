
<?php
	get_header();
?>

<h2>
	<?php the_title(); ?>
</h2>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="post">
			<p class="post-info">
				Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
			</p>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
			<div class="post-comments">
				<?php comments_template(); ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php
	get_footer();
?>
