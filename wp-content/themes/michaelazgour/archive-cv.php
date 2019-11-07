<?php 
/*
* Template Name: CV
*/
?>
<?php get_header(); ?>
	<div class="cv-top">
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
				<div class="container-full">
					<?php the_content(); ?>
					<a href="<?php echo get_post_meta(get_the_ID(),'_cv_main_pdf-link',TRUE); ?>" target="_blank" class="buttonB pdf">Download PDF Version</a>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="container-full cv">
		<?php 
			$args=array(
			  'post_type' => 'cv',
			  'post_status' => 'publish',
			  'posts_per_page' => -1,
			);
			$cv_query = null;
			$cv_query = new WP_Query($args);
		 ?>
		<?php if ( $cv_query->have_posts() ) : ?>
			<?php
				while ( $cv_query->have_posts() ) : $cv_query->the_post();
					?>
						<hr>
						<div class="row the-cv">
							<div class="col-xs-16">
								<h3><?php the_title(); ?><span><?php echo get_post_meta(get_the_ID(),'_cv_selected',TRUE); ?></span></h3>
								<?php the_content(); ?>
							</div>
						</div>
					<?php
				endwhile;
			?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
		<?php quotes_module(); ?>
		<?php modules_module(); ?>
	</div>
<?php get_footer(); ?>
