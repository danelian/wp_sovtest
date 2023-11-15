<?php 

/**
 * ДОБАВЛЕНИЕ ВОЗМОЖНОСТЕЙ
 */
if (! function_exists('sovtest_setup')) {
	function sovtest_setup() {
		// Добавляем динамический <title>
		add_theme_support( 'title-tag' );
	}
	add_action( 'after_setup_theme', 'sovtest_setup' );
}

/**
 * ПОДКЛЮЧЕНИЕ СТИЛЕЙ И СКРИПТОВ
 */
function sovtest_scripts() {
  // STYLES
  // Main style
  wp_enqueue_style('main', get_template_directory_uri());
	// PagePilling
	wp_enqueue_style('pagepiling', get_template_directory_uri() . '/assets/css/jquery.pagepiling.css');
	// Fancybox
	wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/fancybox.min.css');
  // Swiper
  wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
  // App css
  wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/style.min.css');

  // SCRIPTS
  // Jquery
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), null, true);
  wp_enqueue_script('jquery');
	// PagePilling
	wp_enqueue_script('pagepiling', get_template_directory_uri() . '/assets/js/jquery.pagepiling.min.js', array('jquery'), null, true);
  // Fancybox
	wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/fancybox.min.js', array('jquery'), null, true);
  // Swiper
  wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), null, true);
  // App js
  wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery', 'pagepiling', 'fancybox', 'swiper'), null, true);
}
add_action('wp_enqueue_scripts', 'sovtest_scripts');


/**
 * Регистрирация областей меню
 */
function sovtest_menus()
{
	$locations = array(
		'header' => __('Nav Menu', 'sovtest'),
	);
	register_nav_menus($locations);
}
add_action('init', 'sovtest_menus');


// Установка лимита загрузки файлов до 10 МБ
add_filter('upload_size_limit', function($limit) {
	return 10 * 1024 * 1024;
});

/**
 * СОЗДАНИЕ OPTIONS PAGE и OPTIONS SUB PAGE
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Настройки темы',
		'menu_title'	=> 'Настройки темы',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

?>