<?php

/* Adiciona o title do Yoast SEO*/
add_theme_support( 'title-tag' );

/* Adiciona Thumnails em Custom Post */
add_theme_support( 'post-thumbnails' );

/* Adiciona tamanho de Thumnail para os Posts */
add_image_size('post', 300, 300, true);

/* Adiciona tamanho de imagem para os Produtos */
add_image_size('produto', 700, 700, true);

/* Adiciona tamanho de imagem para os Produtos */
add_image_size('produtoThumbnail', 150, 150, true);

/* Adiciona Local de Menu */
function menus () {
	register_nav_menu('primary', __('Menu Principal', 'theme-slug'));
	register_nav_menu('footer_institucional', __('Menu Institucional (Footer)', 'theme-slug'));
	register_nav_menu('footer_produtos_esquerda', __('Produtos Esquerda (Footer)', 'theme-slug'));
	register_nav_menu('footer_produtos_direita', __('Produtos Direita (Footer)', 'theme-slug'));
}
add_action( 'after_setup_theme', 'menus' );

/* Adiciona scripts */
function scriptsSite () {

	/* JQuery */

	wp_enqueue_script('jquery');

	wp_enqueue_script(
		'jQuery',
		get_template_directory_uri() . '/assets/jquery.js',
		array(),
		null,
		true
	);

	/* CSS Geral */

	wp_enqueue_style(
		'CssGeral',
		get_template_directory_uri() . '/css/geral.css',
		array(),
		$ver = false,
		$media = 'all'
	);

	/* CSS Header */

	wp_enqueue_style(
		'CssHeader',
		get_template_directory_uri() . '/css/header.css',
		array(),
		$ver = false,
		$media = 'all'
	);

	/* CSS Bootstrap */

	wp_enqueue_style(
		'CssBootstrap',
		get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css',
		array(),
		$ver = false,
		$media = 'all'
	);

	/* Mascara JS */

	wp_enqueue_script(
		'jQueryMask',
		get_template_directory_uri() . '/assets/mask-jquery/src/jquery.mask.js',
		array(),
		null,
		true
	);

	/* Slick Slider CSS */

	wp_enqueue_style(
		'CssSlickSlider',
		get_template_directory_uri() . '/assets/slick-1.8.1/slick/slick.css',
		array(),
		$ver = false,
		$media = 'all'
	);

	/* Slick Slider JS */

	wp_enqueue_script(
		'slickSliderJs',
		get_template_directory_uri() . '/assets/slick-1.8.1/slick/slick.min.js',
		array('jquery'),
		null,
		false
	);

	/* Bootstrap JS */

	// wp_enqueue_script(
	// 	'bootstrapJs',
	// 	get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js',
	// 	array(),
	// 	null,
	// 	true
	// );

	/* Fancybox JS */

	wp_enqueue_script(
		'fancyboxJs',
		get_template_directory_uri() . '/assets/fancybox-master/fancybox.min.js',
		array(),
		null,
		true
	);

	/* Fancybox CSS */

	wp_enqueue_style(
		'CssFancybox',
		get_template_directory_uri() . '/assets/fancybox-master/fancybox.min.css',
		array(),
		$ver = false,
		$media = 'all'
	);

	/* Font Awesome - CSS */

	wp_enqueue_style(
		'fontawesomeCss',
		get_template_directory_uri() . '/assets/font-awesome/css/fontAwesome.css',
		array(),
		$ver = false,
		$media = 'all'
	);

}
add_action( 'wp_enqueue_scripts', 'scriptsSite' );

?>