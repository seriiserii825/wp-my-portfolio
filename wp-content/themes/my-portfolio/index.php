<?php get_header(); ?>

<div class="container">

	<div class="blog-wrap">
		<div class="blog-content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php $categories = get_the_category() ?>
				<div class="post_box">
					<div class="post_header">
						<p class="post_meta"><span class="cat">Posted in
                                <?php $category_list = ''; ?>
                                <?php foreach ($categories as $category): ?><?php $link = get_category_link($category->cat_ID); ?><?php $category_link = '<a href="' . $link . '">' . $category->cat_name . '</a>, '; ?><?php $category_list .= $category_link; ?><?php endforeach; ?>
                                <?php $category_list = rtrim($category_list, ', ') ?>
                                <?php echo $category_list; ?>
							   </span> | Date: <?php echo get_the_date('M d, Y'); ?></p>
						<h2 class="post-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
					</div>
                    <?php echo kama_thumb_img(['w' => 598, 'h' => 218]) ?>
                    <p><?php the_excerpt(); ?></p>
					<a class="more" href="<?php the_permalink(); ?>">Читать</a>
					<div class="cleaner"></div>
				</div>
            <?php endwhile; ?>
				<!-- post navigation -->
            <?php else: ?>
				<!-- no posts found -->
            <?php endif; ?>
		</div>

		<div class="sidebar">
            <?php get_sidebar(); ?>
		</div>
	</div>
</div> <!-- end of main -->
<div id="templatemo_main_bottom"></div>
<div class="cleaner"></div>
</div> <!-- end of templatemo wrapper -->
</div> <!-- end of templatemo body wrapper -->

<?php get_footer(); ?>


