<?php

add_action( 'wp_enqueue_scripts', 'my_portfolio_scripts' );
function my_portfolio_scripts() {
    // подключаем файл стилей темы
    wp_enqueue_style('base', get_template_directory_uri() . '/assets/css/templatemo_style.css');

    if(is_page('portfolio')){
        wp_enqueue_style('lightbox', get_template_directory_uri() . '/assets/css/jquery.lightbox-0.5.css');
    }

    wp_enqueue_style( 'style-name', get_stylesheet_uri() );

    wp_deregister_script( 'jquery' ); // отменяем зарегистрированный jQuery
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', [], null, true );
    // подключаем js файл темы

    wp_enqueue_script( 'my_portfolio', get_template_directory_uri() .'/assets/js/custom.js', ['jquery'], null, true );
}
