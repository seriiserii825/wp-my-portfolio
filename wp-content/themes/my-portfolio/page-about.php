<?php
/**
 * Template Name: Обо мне
 */
	get_header();
?>

<div class="about-content">
	<div id="templatemo_main" class="main-about">
		<div class="col_w620 float_l">
            <?php if (have_posts()): the_post(); ?>
				<h2><?php the_title(); ?></h2>
                <?php echo kama_thumb_img(['w' => 168, 'h' => 168, 'class' => 'image_wrapper image_fl']); ?><?php the_content(); ?><?php endif; ?>
		</div>
	</div>

	<aside class="sidebar main-sidebar">
        <?php get_sidebar(); ?>
	</aside>
</div>

</div> <!-- end of main -->
	<div id="templatemo_main_bottom"></div>
	<div class="cleaner"></div></div> <!-- end of templatemo wrapper --></div> <!-- end of templatemo body wrapper -->

<?php get_footer(); ?>
