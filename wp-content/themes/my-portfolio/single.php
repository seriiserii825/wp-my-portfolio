<?php get_header(); ?>

<div class="container">
    <div class="single-wrap">
        <div class="single-wrap-content">
            <?php the_post();?>

			<h2><?php the_title();?></h2>
			<div class="single-date">
				Статья была опубликованна: <strong><?php echo get_the_date('M d, Y');?></strong>
				В <?php echo get_the_time();?>
			</div>
			<div class="img-wrap"><?php echo kama_thumb_img(['w' => 256, 'h' => 112])?></div>
            <?php the_content();?>
		</div>

		<aside class="sidebar">
            <?php get_sidebar();?>
		</aside>
    </div>
    <?php
    comments_template();
    wp_list_comments();
    ?>
</div>
</div>
<?php get_footer(); ?>


