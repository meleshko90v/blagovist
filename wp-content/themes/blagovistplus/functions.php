<?php
// способ подключить стили темы
add_action( 'wp_enqueue_scripts', 'blagovistplus_style' );

function blagovistplus_style() {
// підключеня основноо сss
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

	// підключення додаткових сss
    	wp_enqueue_style( 'tcal-style', get_template_directory_uri() . '/assets/css/tcal.css' );
		wp_enqueue_style( 'font-awesome-style', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
		wp_enqueue_style( 'fontawesome-style', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
		wp_enqueue_style( 'icons-style', get_template_directory_uri() . '/assets/css/icons.css' );
//		wp_enqueue_style( 'bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' );

}


// способ подключить скрипты темы
add_action( 'wp_enqueue_scripts', 'blagovistplus_scripts' );
function blagovistplus_scripts() {

// свій jquery не працює?
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );


// подключаем js файл темы
    wp_enqueue_script( 'bootstrap.min.js-scripts', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'sweetalert-scripts', 'https://unpkg.com/sweetalert/dist/sweetalert.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'slim.min-scripts', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'popper.min-scripts', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'index-script', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), null, true );
	wp_enqueue_script( 'tcal-script', get_template_directory_uri() . '/assets/js/tcal.js', array('jquery'), null, true );
	wp_enqueue_script( 'form-script', get_template_directory_uri() . '/assets/js/form.js', array('jquery'), null, true );
}

/*
// Регистрация jQuery
add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
function jquery_script_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
}
*/

// menu

if(function_exists('register_nav_menus')){
	register_nav_menus(
		array( // создаём любое количество областей
		  'main_menu' => 'Головне меню', // 'имя' => 'описание'
		)
	);
}

