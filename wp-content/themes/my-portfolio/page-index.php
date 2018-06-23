<?php
/**
 * Template Name: Главная
 */
get_header();
?>

<div id="templatemo_middle" class="container">

	<img src="<?php echo carbon_get_post_meta(get_the_ID(), 'home_intro_img'); ?>" alt="Free Template"/>

	<div id="mid_title">
        <?php echo carbon_get_post_meta(get_the_ID(), 'home_intro_title') ?>
	</div>

	<p><?php echo carbon_get_post_meta(get_the_ID(), 'home_intro_text') ?></p>

	<div id="learn_more"><a href="<?php echo get_page_uri(18) ?>"></a></div>

	<div class="cleaner"></div>

</div> <!-- end of middle -->

<div id="templatemo_fp_services" class="container">

	<div class="fp_services_box">
        <?php $javascript_posts = new WP_Query(['category_name' => 'javascript', 'posts_per_page' => 1]) ?>
        <?php if ($javascript_posts->have_posts()) : while ($javascript_posts->have_posts()) : $javascript_posts->the_post(); ?>
			<div class="content">
				<div class="fps_title"><a href="#">JavaScript</a></div>
				<p><?php the_excerpt(); ?></p>
			</div>
			<a href="<?php the_permalink(); ?>" class="sb_more">More</a>
        <?php endwhile; ?><?php else: ?><?php endif; ?>
	</div>

	<div class="fp_services_box">
        <?php $php_posts = new WP_Query(['category_name' => 'php', 'posts_per_page' => 1]) ?>
        <?php if ($php_posts->have_posts()) : while ($php_posts->have_posts()) : $php_posts->the_post(); ?>
			<div class="content">
				<div class="fps_title"><a href="#">Php</a></div>
				<p><?php the_excerpt(); ?></p>
			</div>
			<a href="<?php the_permalink(); ?>" class="sb_more">More</a>
        <?php endwhile; ?><?php else: ?><?php endif; ?>
	</div>

	<div class="fp_services_box">
        <?php $wordpress_posts = new WP_Query(['category_name' => 'wordpress', 'posts_per_page' => 1]) ?>
        <?php if ($wordpress_posts->have_posts()) : while ($wordpress_posts->have_posts()) : $wordpress_posts->the_post(); ?>
			<div class="content">
				<div class="fps_title"><a href="#">Wordpress</a></div>
				<p><?php the_excerpt(); ?></p>
			</div>
			<a href="<?php the_permalink(); ?>" class="sb_more">More</a>
        <?php endwhile; ?><?php else: ?><?php endif; ?>
	</div>

</div> <!-- end of templatemo fp services -->

<div class="container">
	<div id="templatemo_main">
		<div class="templatemo__main__item templatemo__main-left">
            <?php if(!dynamic_sidebar('templatemo_main_left_widget')):?>
				<h2>Виджет последних записей Carbon</h2>
            <?php endif;  ?>

			<a class="more" href="<?php echo get_page_uri(14);?>">View All</a>
		</div>

		<div class="templatemo__main__item templatemo__main-center">
			<h2>Who We Are</h2>
            	<?php echo carbon_get_post_meta(18, 'about_cite');?>

			<a class="more" href="<?php echo get_page_link(18);?>">More</a>

		</div>

		<div class="templatemo__main__item templatemo__main-right">
            <div class="img-wrap">
				<img src="<?php echo carbon_get_post_meta(18, 'about_img');?>" alt="">
			</div>

            <?php echo carbon_get_post_meta(18, 'about_text');?>

			<a class="more" href="<?php echo get_page_link(18);?>">More</a>

		</div>

	</div>
</div>
<div id="templatemo_main_bottom"></div>
</div><!-- end of templatemo wrapper --></div> <!-- end of templatemo body wrapper -->

<?php get_footer(); ?>
