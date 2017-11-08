<?php

//подключение меню стандартными средствами WordPress в админпанель
if(function_exists('register_nav_menus')){
	register_nav_menus(
		array( // создаём любое количество областей
		  'main_menu' => 'Меню сверху', // 'имя' => 'описание'
		  'foot_menu' => 'Меню в футере',
		  'sidebar-left_menu' => 'Меню в колонке слева',
		  'sidebar-home_menu' => 'Меню в колонке на главной странице'
		)
	);
}
//поддержка миниатюр
if ( function_exists('add_theme_support')){ 
  add_theme_support('post-thumbnails'); 
}
//подключение сайдбара
function striped_sidebar() {
 
	$argsl = array(
		'id'            => 'sidebar-left',
		'name'          => 'Колонка с лева',
		'description'   => __( 'Left Sidebar', 'striped' ),
		'class'         => 'striped-widget',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $argsl );

	$argsh = array(
		'id'            => 'sidebar-home',
		'name'          => 'Колонка на главной странице',
		'description'   => __( 'Home Sidebar', 'striped' ),
		'class'         => 'striped-widget',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $argsh );
 
}
add_action( 'widgets_init', 'striped_sidebar' );

?>