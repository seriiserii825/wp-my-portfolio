<?php 
// обязательный для темы плагин kama thumbnail
if( ! is_admin() && ! function_exists('kama_thumb_img') ){
     wp_die('Активируйте обязательный для темы плагин Kama Thumbnail');
}