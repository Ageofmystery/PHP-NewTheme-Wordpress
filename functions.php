<?php

function loadResources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'loadResources');

if (function_exists('add_theme_support')) add_theme_support('post-thumbnails');

register_nav_menus([
	'primary' => 'Header',
	'social' => 'Footer',
]);

function addClassToLinks($className) {
	return preg_replace('/<a /', '<a class="text-center"', $className);
}
add_filter('wp_nav_menu','addClassToLinks');

register_sidebar([
	'id' => 'right_bar',
	'name' => 'Prime sidebar',
	'description' => 'right sidebar for widgets',
	'class' => '',
	'before_widget' => '<div id="%1$s" class="widget-cat %2$s">',
	'after_widget' => "</div>\n",
	'before_title' => '<h5 class="text-uppercase aside-head">',
	'after_title' => "</h5>\n",
]);