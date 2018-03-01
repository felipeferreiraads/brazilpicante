<?php
/*
	Template Name: Ajax Posts
*/

$posts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3, 'paged' => $_POST['paged']));
while($posts->have_posts()): $posts->the_post();?>
	<div class="item">
		<a href="<?php echo the_permalink();?>" title="<?php echo get_the_title();?>">
			<img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo get_the_title();?>">
		</a>
		<a href="<?php echo the_permalink();?>" title="<?php echo get_the_title();?>">
			<h3><?php echo get_the_title();?></h3>
		</a>
	</div><?php
endwhile;