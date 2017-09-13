
<?php
	get_header();
?>

<div class="container">
	<h1>
		<i class="fa fa-tags" aria-hidden="true"></i>
		<?php single_cat_title(); ?>
	</h1>
	<?php get_template_part('templates/loop'); ?>
</div>

<?php
	get_footer();
?>
