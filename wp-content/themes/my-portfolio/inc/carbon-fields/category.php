<?php

use Carbon_Fields\Field;
use Carbon_Fields\Container;

Container::make('term_meta', __('Term Options', 'crb'))
    ->where('term_taxonomy', '=', 'category')// only show our new field for categories
    ->add_fields(array(
        Field::make('image', 'category_image', 'Картинка категории')
            ->set_required(true)
            ->set_value_type('url')
    ));
