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
				<div class="row paper-flow">
					<div class="col-md-6 info-paper">
						<h1>Desenvolvimento web de alta performance</h1>
						<p>Faça a sua empresa crescer na web com o site ceto para o seu público alvo, com um hambiente robusto e intuitivo para facilitar o aprendizado, você vai poder gerar conteúdo mais facilmente. Tudo isso mesclando integrações com ferramentas importantes para facilitar o seu entendimento das necesidades dos seus clientes</p>
						<a href="#">Para saber mais clique aqui</a>
					</div>
				</div>
			</div>
		</header>