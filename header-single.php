<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<link rel = "shortcut icon" href = "<?php bloginfo('template_url'); ?>/favicon.ico" />
		<?php wp_head(); ?>
	</head>
	<body <?php get_body_class(); ?>>
		<header role="banner" class="main-header">
			<div class="container-fluid header-home">
				<div class="row primary-line">					
					<nav class="primary-navbar" role="main-navigation">
						<a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/svg/renan-cog.svg"></a>
						<ul class="main-links">
							<li><a href="#">Página inicial</a></li>
							<li><a href="#">Métodos</a></li>
							<li><a href="#">Portfólio</a></li>
							<li><a href="#">Blog oficial</a></li>
							<li><a href="#">Contato</a></li>
						</ul>
					</nav>
				</div>
				<div class="row title-page">
					<div class="col-lg-5">
						<h1><?php the_title( '<h1>', '</h1>' ); ?></h1>
					</div>
				</div>
			</div>
		</header>