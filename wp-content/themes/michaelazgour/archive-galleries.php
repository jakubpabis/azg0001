<?php 
/*
* Template Name: Galleries
*/
?>
<?php get_header(); ?>
	<div class="galleries-top">
		<?php if( have_posts() ) : ?>
			<?php while( have_posts() ) : the_post(); ?>
				<?php 
					$thumb_id = get_post_thumbnail_id();
					$thumb1 = wp_get_attachment_image_src($thumb_id, 'full_size', true);
					$thumb2 = wp_get_attachment_image_src($thumb_id, 'full_sizeM', true);
					$thumb3 = wp_get_attachment_image_src($thumb_id, 'full_sizeS', true);
				 ?>
				<picture>
					<source srcset="<?php echo $thumb1[0]; ?>" media="(min-width: 801px)">
					<source srcset="<?php echo $thumb2[0]; ?>" media="(min-width: 581px)">
					<source srcset="<?php echo $thumb3[0]; ?>" media="(max-width: 580px)">
					<img src="<?php echo $thumb1[0]; ?>">
				</picture>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="container-full galleries">
		<?php 
			$args=array(
			  'post_type' => 'galleries',
			  'post_status' => 'publish',
			  'posts_per_page' => -1,
			);
			$galleries_query = null;
			$galleries_query = new WP_Query($args);
		 ?>
		<?php if ( $galleries_query->have_posts() ) : ?>
			<?php
				while ( $galleries_query->have_posts() ) : $galleries_query->the_post();
					?>
						<div class="row the-gallery">
							<div class="col-l-53 col-xs-16">
								<h1><?php the_title(); ?></h1>
								<h5><?php echo get_post_meta(get_the_ID(),'_my_galleries-sub-title',TRUE); ?></h5>
							</div>
							<div class="col-l-3 col-s-6 galleries-column1">
								<?php $column1 = get_post_meta(get_the_ID(),'_my_galleries-column1',TRUE); 
									echo apply_filters('meta_content', $column1 );
								?>
							</div>
							<div class="col-l-7 col-s-10 galleries-column2">
								<?php $column2 = get_post_meta(get_the_ID(),'_my_galleries-column2',TRUE);
									echo apply_filters('meta_content', $column2 );
								 ?>
							</div>
						</div>
						<hr/>
					<?php
				endwhile;
			?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
		<?php quotes_module(); ?>
		<?php modules_module(); ?>
	</div>
<?php get_footer(); ?>
