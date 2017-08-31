
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name='viewport' content='initial-scale=1,maximum-scale=1' />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" />
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');  ?>" />
		<title><?php the_title(); ?></title>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/index.js"></script>
		<?php wp_head(); ?>
	</head>
	<body>

	<div id="whitesail"></div>

	<div id="header-mobile">
		<div id="closebutton" class="clicked">
			<svg height="26px" width="36px">
				<g stroke="#bbb" stroke-width="2">
					<line x1="0" y1="1" x2="26" y2="1"/>
					<line x1="0" y1="7" x2="36" y2="7"/>
					<line x1="0" y1="13" x2="20" y2="13"/>
					<line x1="0" y1="19" x2="28" y2="19"/>
					<line x1="0" y1="25" x2="18" y2="25"/>
				</g>
			</svg>
		</div>
		<a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>
	</div>

	<?php
		get_header();
		get_template_part('leftpanel');
	?>

	<div class="rightpanel">
	  <div class="container">
