<?php
add_theme_support ('title-tag');
//
//Adiciona imagem de cabeçalho automaticamente
//
add_theme_support ('custom-header', array(
	'default-image' => get_template_directory_uri(). '/assets/imagens/programmer-bck.jpg',
	'width' => '1200',
	'height' => '600',
	'flex-width' => true,
	'flex-height' => true,
	'uploads' => true, 
)); ?>
<?php
//
//Função para adicionar a imagem de cabeçalho
//
function onix_header_image(){
	if (has_header_image()) { ?>
		<img src="<?php header_image(); ?>" alt="Imagem de cabeçalho"/><?php
	} else{ ?>
		<style>body header.main-header{backgroud-color: #19B7E3; background-size: cover; webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; }</style><?php
	}
}
?>
<?php 
//
//Adiciona logotipo automaticamente
//
function onix_custom_logo_setup() {
    $my_logo = array(
        'height'      => 40,
        'width'       => 240,
        'flex-height' => false,
        'flex-width'  => false,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $my_logo );
}
add_action( 'after_setup_theme', 'onix_custom_logo_setup' );
?>
<?php 
//
//Função para registrar o nome do site
//
function register_name_site(){
	
}
?>
<?php
//
//Função para chamar o Logotipo
//
function onix_custom_logo_type() {
	$site_name = ('title-tag');
	if ( has_custom_logo() ) { ?>
	    <img src="<?php the_custom_logo(); ?>" alt="Logotipo oficial"/><?php
	} else {?>
	    <h1>Site criado por Renan Delgado</h1><?php
	}
}
?>
<?php
//
//Função para chamada de menu dinâmico
//
function register_onix_menus(){
	register_nav_menus(array(
		'primary' => __('Menu Principal'),
		'category' => __('Menu de categorias'),
		'footer_left' => __('Menu inferior esquerdo'),
		'footer_middle' => __('Menu inferior do meio'), 
	));
}
add_action('init', 'register_onix_menus');
//Função para menu dinâmico
function onix_nav_menu_header(){
	if (has_nav_menu('primary')) {
		wp_nav_menu(array(
			'theme_location' => 'primary',
			'depth' => 1,
			'container_class' => 'navbar-header',
			'fallback_cb' => false,
		));
	}
}
function onix_nav_menu_category(){
	if (has_nav_menu('category')) {
		wp_nav_menu(array(
			'theme_location' => 'category',
			'depth' => 1,
			'container_class' => 'navbar-category',
			'fallback_cb' => false,
		));
	}
}
function onix_nav_menu_footer_left(){
	if (has_nav_menu('footer_left')) {
		wp_nav_menu(array(
			'theme_location' => 'footer_left',
			'depth' => 1,
			'container_class' => 'navbar-footer-left',
			'fallback_cb' => false,
		));
	}
}
function onix_nav_menu_footer_middle(){
	if (has_nav_menu('footer_middle')) {
		wp_nav_menu(array(
			'theme_location' => 'footer_middle',
			'depth' => 1,
			'container_class' => 'navbar-footer-middle',
			'fallback_cb' => false,
		));
	}
}

function onix_stylesheets(){
	wp_enqueue_style('onix-grid', get_template_directory_uri(). '/assets/css/onix-grid.min.css');
	if (is_page_template('homepage' && 'index')) {
		wp_enqueue_style('main-header', get_template_directory_uri(). '/assets/css/main-header.min.css');
		wp_enqueue_style('main-body', get_template_directory_uri(). '/assets/css/main-content.min.css');
		wp_enqueue_style('main-footer', get_template_directory_uri(). '/assets/css/main-footer.min.css');
	}elseif (is_page()) {
		wp_enqueue_style('page-headers', get_template_directory_uri(). '/assets/css/header-pages.min.css');
		wp_enqueue_style('main-body', get_template_directory_uri(). '/assets/css/main-content.min.css');
		wp_enqueue_style('main-footer', get_template_directory_uri(). '/assets/css/main-footer.min.css');
	}else{

	}
}

add_action('init', 'onix_stylesheets');