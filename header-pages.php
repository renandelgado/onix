<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8"/>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<link rel = "shortcut icon" href = "<?php bloginfo('template_url'); ?>/favicon.ico" />
		<?php wp_head(); ?>
	</head>
	<body <?php get_body_class(); ?>>
		<header role="banner" class="main-header">
			<div class="container-fluid">
				<?php onix_header_image(); ?>
				<?php get_template_part('template-parts/navigation/navigation'); ?>
			</div>
		</header>