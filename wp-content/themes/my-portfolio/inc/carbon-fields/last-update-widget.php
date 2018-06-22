<?php

use Carbon_Fields\Widget;
use Carbon_Fields\Field;

class ThemeWidgetExample extends Widget{
    // Register widget function. Must have the same name as the class
    function __construct(){
        $this->setup('theme_widget_example', 'Carbon Последние записи', 'Выводит отформатированные последние записи', array(
            Field::make('text', 'title', 'Заголовок записи')
        ));
    }

    // Called when rendering the widget in the front-end
    function front_end($args, $instance){

        if (!empty($instance['title'])){
            echo $args['before_title'] . $instance['title'] . $args['after_title'];
        }

        // параметры по умолчанию
        $args = array(
            'numberposts' => 5,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        );


        $latest_posts = new WP_Query(['posts_per_page' => 3]);
		?>

		<?php if ( $latest_posts->have_posts() ) :  while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>

			<?php $category_id = get_the_category()[0]->term_id;?>
			<div class="fp_news_box">
                <?php $category_image_url = carbon_get_term_meta($category_id, 'category_image');?>
				<div class="fp_news_box_header">
					<div class="img-wrap">
						<img src="<?php echo $category_image_url; ?>" alt=""/>
					</div>
					<div class="content">
						<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>
				<div class="fp_news_date"><?php echo get_the_date();?></div>
			</div>
		<?php endwhile; ?>
		    <?php else:?>
		<?php endif; ?>

		<?php
    }
}

function load_widgets(){
    register_widget('ThemeWidgetExample');
}

add_action('widgets_init', 'load_widgets');
