
<?php
	get_header();
?>

<h2>
	<?php the_title(); ?>
</h2>

<div class="main page">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post">
				<div class="post-content">
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php
	get_footer();
?>
