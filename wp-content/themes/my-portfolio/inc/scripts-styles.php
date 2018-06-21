<?php

add_action('wp_enqueue_scripts', 'my_portfolio_scripts');

function my_portfolio_scripts(){
	wp_enqueue_style('base', get_template_directory_uri() . '/assets/css/templatemo_style.css');
	wp_enqueue_style('my_portfolio', get_stylesheet_uri());
	
	wp_register_script('my-portfolio-jquery', get_template_directory_uri() . '/assets/js/jquery.js', false, null, true);
}
