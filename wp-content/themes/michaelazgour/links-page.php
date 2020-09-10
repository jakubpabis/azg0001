<?php 

/*
	Template Name: Links
*/

 ?>

 <?php if ( have_posts() ) : ?>
	<?php
		while ( have_posts() ) : the_post();
			$links1 = get_post_meta(get_the_ID(),'_my_links-1',TRUE); 
			echo apply_filters('meta_content', $links1 );
			$links2 = get_post_meta(get_the_ID(),'_my_links-2',TRUE); 
			echo apply_filters('meta_content', $links2 );
			$links3 = get_post_meta(get_the_ID(),'_my_links-3',TRUE); 
			echo apply_filters('meta_content', $links3 );
		endwhile;
	?>
<?php endif; ?>