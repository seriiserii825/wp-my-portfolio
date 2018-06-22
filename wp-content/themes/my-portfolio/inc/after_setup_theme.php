<?php
add_action('after_setup_theme', 'my_portfolio_after_setup');
function my_portfolio_after_setup(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'widgets' );
}
