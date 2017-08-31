
<?php
	get_header();
?>

<h2>
	<i class="fa fa-folder-open-o" aria-hidden="true"></i>
	<?php single_cat_title(); ?>
</h2>
<?php get_template_part('loop'); ?>

<?php
	get_footer();
?>
