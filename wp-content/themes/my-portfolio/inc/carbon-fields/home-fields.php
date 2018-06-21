<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Контент на главной' )
     ->where( 'post_type', '=', 'page' )
     ->where( 'post_id', '=', 7 )
         ->add_tab('Интро на главной', array(
             Field::make('text', 'home_intro_title', 'Заголовок интро')
             ->set_width(33),
             Field::make('text', 'home_intro_text', 'Текст интро')
             ->set_width(33),
             Field::make('image', 'home_intro_img', 'Картинка интро')
                 ->set_width(33)
                 ->set_value_type( 'url' )
         ));
