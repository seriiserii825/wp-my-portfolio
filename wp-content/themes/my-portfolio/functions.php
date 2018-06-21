<?php 

//require_once __DIR__.'/inc/carbon-fields/if-plugin-exist.php';
require_once __DIR__.'/inc/if-plugin-kama_exist.php';

add_filter('show_admin_bar', '__return_false'); // отключить
add_action( 'carbon_fields_register_fields', 'crb_attach_post_options' );

require_once __DIR__.'/inc/scripts-styles.php';
require_once __DIR__.'/inc/after_setup_theme.php';
require_once __DIR__.'/inc/post-type.php';

register_nav_menu( 'main-menu', 'Главное меню' );

function crb_attach_post_options(){
    require_once __DIR__ . '/inc/carbon-fields/home-fields.php';
}

add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes', 10, 4 );

function change_menu_item_css_classes( $classes, $item, $args, $depth ) {
    if ( $args->theme_location === 'main-menu' ) {
        $classes[] = 'cd-label';
    }

    return $classes;
}

