<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8"/>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<link rel = "shortcut icon" href = "<?php bloginfo('template_url'); ?>/favicon.ico" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"/>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/lib.min.css"/>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/main-header.min.css"/>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/main-content.min.css"/>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/main-footer.min.css"/>
		<?php wp_head(); ?>
	</head>
	<body <?php get_body_class(); ?>>
		<header role="banner" class="main-header">
			<div class="container-fluid">
				<?php onix_header_image(); ?>
				<?php get_template_part('template-parts/navigation'); ?>
				<div class="row paper-flow">
					<div class="col-md-5 info-paper">
						<h1>Desenvolvimento web feito com profissionalismo e dedicação</h1>
					</div>
				</div>
			</div>
		</header>