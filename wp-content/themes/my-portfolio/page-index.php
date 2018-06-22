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
		<div class="fps_title"><a href="#">Web Design</a></div>
		<p>Etiam magna metus, hendrerit non aliquam nec, tincidunt nec metus.</p>
		<a href="#" class="sb_more">More</a>
	</div>

	<div class="fp_services_box">
		<div class="fps_title"><a href="#">CSS Templates</a></div>
		<p>Etiam magna metus, hendrerit non aliquam nec, tincidunt nec metus.</p>
		<a href="#" class="sb_more">More</a>
	</div>

	<div class="fp_services_box">
		<div class="fps_title"><a href="#">Interactive Media</a></div>
		<p>Etiam magna metus, hendrerit non aliquam nec, tincidunt nec metus.</p>
		<a href="#" class="sb_more">More</a>из
	</div>

</div> <!-- end of templatemo fp services -->

<div class="container">
	<div id="templatemo_main">
		<div class="templatemo__main-left">
			<h2> Latest Updates</h2>

			<div class="fp_news_box">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/templatemo_image_03.jpg" alt="News One"/>
				<h6><a href="#">Quisque ornare pulvinar</a></h6>
				Aliquam lacus turpis, dapibus eget, tincidunt eu. Integer pellentesque dignissim.
				<div class="fp_news_date">June 28, 2048</div>
				<div class="cleaner"></div>
			</div>

			<div class="fp_news_box">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/templatemo_image_02.jpg" alt="News Two"/>
				<h6><a href="#">Nullam consectetur</a></h6>
				Nam id nibh quis nisi tristique pharetra a ut leo. Aenean vel lorem odio.
				<div class="fp_news_date">June 24, 2048</div>
				<div class="cleaner"></div>
			</div>

			<div class="fp_news_box">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/templatemo_image_04.jpg" alt="News Three"/>
				<h6><a href="#">Pellentesque consequat</a></h6>
				Pellentesque lectus justo, fermentum in, ornare vitae, vehicula eu, felis.
				<div class="fp_news_date">June 22, 2048</div>
				<div class="cleaner"></div>
			</div>
			<a class="more" href="#">View All</a>
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
<div id="templatemo_main_bottom"></div>
</div><!-- end of templatemo wrapper -->
</div> <!-- end of templatemo body wrapper -->

<?php get_footer(); ?>
