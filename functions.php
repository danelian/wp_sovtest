<?php 

/**
 * ДОБАВЛЕНИЕ ВОЗМОЖНОСТЕЙ
 */
if (! function_exists('sovtest_setup')) {
	function freediving_setup() {
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
  // Fullpage
  wp_enqueue_style('fullpage', get_template_directory_uri() . '/assets/css/fullpage.min.css');
  // Swiper
  wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
  // App css
  wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/style.min.css');

  // SCRIPTS
  // Jquery
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), null, true);
  wp_enqueue_script('jquery');
  // Fullpage
  wp_enqueue_script('fullpage', get_template_directory_uri() . '/assets/js/fullpage.min.js', array('jquery'), null, true);
  wp_enqueue_script('fullpage-extensions', get_template_directory_uri() . '/assets/js/fullpage.extensions.min.js', array('jquery'), null, true);
  // Swiper
  wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), null, true);
  // App js
  wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery', 'fullpage', 'fullpage-extensions', 'swiper'), null, true);
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