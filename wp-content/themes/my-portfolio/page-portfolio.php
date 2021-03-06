<?php
/**
 * Template Name: Портфолио
 */
	get_header();
?>

	<div id="templatemo_main">
        <?php the_post();?>
		<h2><?php the_title();?></h2>
        <p><?php the_content();?></p>

		<div id="gallery" class="gallery">
            <?php $portfolio_posts = new WP_Query(['post_type' => 'portfolio', 'posts_per_page' => -1]);?>

			<?php if ( $portfolio_posts->have_posts() ) :  while ( $portfolio_posts->have_posts() ) : $portfolio_posts->the_post(); ?>
				<div class="gallery__item">
					<div class="inner-block">
						<div class="inner-block__item inner-block__link">
							<a class="inner-block-site-title" href="<?php echo carbon_get_post_meta(get_the_ID(), 'portfolio_link')?>" target="_blank">
                                <?php the_title();?>
							</a>
						</div>
						<div class="inner-block__item inner-block__review">
							<h4><?php echo carbon_get_post_meta(get_the_ID(), 'portfolio_reviews_title')?></h4>
							<a href="<?php echo carbon_get_post_meta(get_the_ID(), 'portfolio_reviews_link')?>" target="_blank">
                                <span><?php echo carbon_get_post_meta(get_the_ID(), 'portfolio_reviews_text');?></span>
							</a>
						</div>
					</div>
					<img src="<?php echo kama_thumb_src(['w' => 353, 'h' => 266]) ?>" alt="Image 1"/>
				</div>
			<?php endwhile; ?>
			    <?php else:?>
			<?php endif; ?>
		</div>
	</div> <!-- end of main -->
	<div id="templatemo_main_bottom"></div>
	<div class="cleaner"></div>
</div> <!-- end of templatemo wrapper -->
</div> <!-- end of templatemo body wrapper -->
<?php get_footer(); ?>




