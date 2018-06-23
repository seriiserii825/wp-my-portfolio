<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Портфолио' )
    ->where( 'post_type', '=', 'portfolio')
    ->add_tab('Ссылка', [
        Field::make( 'text', 'portfolio_link', 'Ссылка на портфолио')
        ->set_required(true)
    ]);
