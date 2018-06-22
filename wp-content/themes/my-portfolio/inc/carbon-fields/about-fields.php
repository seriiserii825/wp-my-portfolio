<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Контент страницы Обо Мне')
    ->where('post_type', '=', 'page')
    ->where('post_id', '=', 18)
    ->add_tab('Цитата', array(
        Field::make('rich_text', 'about_cite', 'Цитата')
            ->set_required(true),
    ))
    ->add_tab('Картинка', array(
        Field::make('image', 'about_img', 'Картинка страницы Обо Мне')
            ->set_required(true)
            ->set_value_type('url')
    ))
    ->add_tab('Список', array(
        Field::make('rich_text', 'about_text', 'Список страницы Обо Мне')
            ->set_required(true)
    ));

