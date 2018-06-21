<?php

require_once __DIR__.'/inc/if-plugin-kama_exist.php';

//add_filter('show_admin_bar', '__return_false'); // отключить
add_action( 'carbon_fields_register_fields', 'crb_attach_post_options' );

require_once __DIR__.'/inc/scripts-styles.php';
require_once __DIR__.'/inc/after_setup_theme.php';
require_once __DIR__.'/inc/post-type.php';

register_nav_menu( 'main-menu', 'Главное меню' );

function crb_attach_post_options(){
    require_once __DIR__ . '/inc/carbon-fields/home-fields.php';
}

function my_favicon() {
echo '<link rel="shortcut Icon" type="image/x-icon"
 href="'.get_template_directory_uri().'/favicon.ico" />';
}
add_action('wp_head', 'my_favicon');

