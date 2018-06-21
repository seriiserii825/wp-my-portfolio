<?php 

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Текст слайдера' )
     ->where( 'post_type', '=', 'page' )
     ->where( 'post_id', '=', 7 )
         ->add_tab('Слайдер', array(
             Field::make('text', 'home_slider_text_1', 'Текст слайдера')
             ->set_width(33),
             Field::make('text', 'home_slider_text_2', 'Текст слайдера')
             ->set_width(33),
             Field::make('text', 'home_slider_text_3', 'Текст слайдера')
             ->set_width(33)
         ))
         ->add_tab('Фоновое изображение', array(
             Field::make('image', 'home_background_image_1', 'Кантинка первой секции')
             ->set_width(20),
             Field::make('image', 'home_background_image_2', 'Кантинка второй секции')
             ->set_width(20),
             Field::make('image', 'home_background_image_3', 'Кантинка третьей секции')
             ->set_width(20),
             Field::make('image', 'home_background_image_4', 'Кантинка четвертой секции')
             ->set_width(20),
             Field::make('image', 'home_background_image_5', 'Кантинка пятой секции')
             ->set_width(20),
         ));
