<?php
add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
    register_sidebar( array(
        'name'          => 'Templatemo main left',
        'id'            => "templatemo_main_left_widget",
        'description'   => '',
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => "",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ) );
}
