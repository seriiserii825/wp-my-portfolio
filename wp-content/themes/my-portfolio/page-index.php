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
				<div class="fps_title"><a href="#">Web Design</a></div>
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
		<div class="templatemo__main-left">
			<h2> Latest Updates</h2>

			<!--<div class="fp_news_box">
				<img src="<?php /*bloginfo('template_url'); */ ?>/assets/images/templatemo_image_03.jpg" alt="News One"/>
				<?php /*$javascript_posts = new WP_Query(['category_name' => 'javascript', 'posts_per_page' => 1]) */ ?>
                <?php /*var_dump($javascript_posts);*/ ?>
				<?php /*if ($javascript_posts->have_posts()) : while ($javascript_posts->have_posts()) : $javascript_posts->the_post(); */ ?>
					<h6><a href="#">JavaScript</a></h6>
					<p><?php /*the_excerpt();*/ ?></p>
					<div class="fp_news_date"><?php /*echo get_the_date();*/ ?></div>
					<div class="cleaner"></div>
                <?php /*endwhile; */ ?><?php /*else: */ ?><?php /*endif; */ ?>
			</div>

			<div class="fp_news_box">
				<img src="<?php /*bloginfo('template_url'); */ ?>/assets/images/templatemo_image_03.jpg" alt="News One"/>
                <?php /*$php_posts = new WP_Query(['category_name' => 'php', 'posts_per_page' => 1]) */ ?>
				<?php /*if ($php_posts->have_posts()) : while ($php_posts->have_posts()) : $php_posts->the_post(); */ ?>
					<h6><a href="#">Php</a></h6>
					<p><?php /*the_excerpt();*/ ?></p>
					<div class="fp_news_date"><?php /*echo get_the_date();*/ ?></div>
					<div class="cleaner"></div>
                <?php /*endwhile; */ ?><?php /*else: */ ?><?php /*endif; */ ?>
			</div>

			<div class="fp_news_box">
				<img src="<?php /*bloginfo('template_url'); */ ?>/assets/images/templatemo_image_03.jpg" alt="News One"/>
                <?php /*$wordpress_posts = new WP_Query(['category_name' => 'wordpress', 'posts_per_page' => 1]) */ ?>
				<?php /*if ($wordpress_posts->have_posts()) : while ($wordpress_posts->have_posts()) : $wordpress_posts->the_post(); */ ?>
					<h6><a href="#">Wordpess</a></h6>
					<p><?php /*the_excerpt();*/ ?></p>
					<div class="fp_news_date"><?php /*echo get_the_date();*/ ?></div>
					<div class="cleaner"></div>
                <?php /*endwhile; */ ?><?php /*else: */ ?><?php /*endif; */ ?>
			</div>

			<a class="more" href="#">View All</a>-->
		</div>

		<div class="templatemo__main-right">
			<h2>Who We Are</h2>

			<img src="<?php bloginfo('template_url'); ?>/assets/images/templatemo_image_01.jpg"
				 class="image_wrapper image_fr" alt="banner"/>

			<p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum velit in tortor faucibus id
					tempus
					enim sodales. Vestibulum quam purus, euismod eget malesuada sit amet, condimentum id massa. </em>
			</p>

			<p align="justify"><a href="#">Light Gray Template</a> is provided for your personal or commercial websites.
				Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a>
				&amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.
				Credits
				go to <a href="http://www.photovaco.com" target="_blank">Free Photos</a> for photos and <a
						href="http://www.vectorvaco.com" target="_blank">Free Vectors</a> for icons used in this
				template.
				Etiam magna metus, hendrerit non aliquam nec, tincidunt nec metus. Sed nec odio vel nulla pellentesque
				sodales a molestie nisi.
			</p>

			<div class="cleaner h10"></div>

			<ul class="tmo_list float_l">
				<li><a href="#">Sed elementum velit in tortor faucibus</a></li>
				<li><a href="#">Praesent tempor quam a turpis volutpat</a></li>
				<li><a href="#">Etiam adipiscing massa ut tortor </a></li>
				<li><a href="#">Nullam consectetur volutpat adipiscing</a></li>
				<li><a href="#"> Sed turpis dolor, tincidunt in tempor</a></li>
			</ul>

			<ul class="tmo_list float_r">
				<li><a href="#">Etiam adipiscing massa ut tortor </a></li>
				<li><a href="#">Nullam consectetur volutpat adipiscing</a></li>
				<li><a href="#"> Sed turpis dolor, tincidunt in tempor</a></li>
				<li><a href="#">Sed elementum velit in tortor faucibus</a></li>
				<li><a href="#">Praesent tempor quam a turpis</a></li>
			</ul>

			<div class="cleaner"></div>

			<a class="more" href="#">More</a>

		</div>

	</div>
</div>
<div id="templatemo_main_bottom"></div></div><!-- end of templatemo wrapper --></div> <!-- end of templatemo body wrapper -->

<?php get_footer(); ?>
