<?php 

add_action( 'wp_enqueue_scripts', 'my_portfolio_scripts' );

function my_portfolio_scripts(){
    wp_enqueue_style('base', get_template_directory_uri().'/assets/css/base.css');
    wp_enqueue_style('skeleton', get_template_directory_uri().'/assets/css/skeleton.css');
    wp_enqueue_style('layout', get_template_directory_uri().'/assets/css/layout.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.css');
    wp_enqueue_style('retina', get_template_directory_uri().'/assets/css/retina.css');
    wp_enqueue_style('owl.carousel', get_template_directory_uri().'/assets/css/owl.carousel.css');
    wp_enqueue_style('owl.transitions', get_template_directory_uri().'/assets/css/owl.transitions.css');
    wp_enqueue_style( 'my_portfolio', get_stylesheet_uri() );

    wp_enqueue_script('modernizr.custom', get_template_directory_uri().'/assets/js/modernizr.custom.js', [], null, true);
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri().'/assets/js/jquery-2.1.1.js', false, null, true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('royal_preloader.min', get_template_directory_uri().'/assets/js/royal_preloader.min.js', ['jquery'], null, true);
    wp_enqueue_script('preloader-custom', get_template_directory_uri().'/assets/js/preloader-custom.js', ['jquery'], null, true);
    wp_enqueue_script('retina-1.1.0.min', get_template_directory_uri().'/assets/js/retina-1.1.0.min.js', ['jquery'], null, true);
    wp_enqueue_script('jquery.easing', get_template_directory_uri().'/assets/js/jquery.easing.js', ['jquery'], null, true);
    wp_enqueue_script('menu', get_template_directory_uri().'/assets/js/menu.js', ['jquery'], null, true);
    wp_enqueue_script('velocity.min', get_template_directory_uri().'/assets/js/velocity.min.js', ['jquery'], null, true);
    wp_enqueue_script('velocity.ui.min', get_template_directory_uri().'/assets/js/velocity.ui.min.js', ['jquery'], null, true);
    wp_enqueue_script('jquery.fs.tipper.min', get_template_directory_uri().'/assets/js/jquery.fs.tipper.min.js', ['jquery'], null, true);
    wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/assets/js/owl.carousel.min.js', ['jquery'], null, true);
    wp_enqueue_script('home-scroll', get_template_directory_uri().'/assets/js/home-scroll.js', ['jquery'], null, true);
    wp_enqueue_script('custom-home', get_template_directory_uri().'/assets/js/custom-home.js', ['jquery'], null, true);
}