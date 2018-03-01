<?php
if(have_posts()): the_post();
	echo '<div class="post">';
	the_title('<h1>','</h1>');
	the_content();
	echo '</div>';
endif;