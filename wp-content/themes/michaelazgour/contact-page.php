<?php 
/*
* Template Name: Contact
*/
?>
<?php get_header(); ?>
	<div class="contact-top">
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
	</div>
	<div class="container-full contact">
		<div class="row contact-info">
			<div class="col-l-53">
				<h1><?php echo get_post_meta(get_the_ID(),'_my_title',TRUE); ?></h1>
				<h5><?php echo get_post_meta(get_the_ID(),'_my_sub-title',TRUE); ?></h5>
			</div>
			<div class="col-l-106">
				<p class="contact-text">
					<?php echo get_post_meta(get_the_ID(),'_my_text',TRUE); ?>
				</p>
				<div class="row address">
					<div class="col-xl-53 col-l-7 col-m-6 col-s-7">
						<p>
							T: <a href="tel:+1 415 992 6455">+1 415 992 6455</a><br/>
							E: <a href="mailto:mazgour@gmail.com">mazgour@gmail.com</a>
						</p>
					</div>
				</div>
				<div class="row form">
					<div class="col-xs-16">
						<h3>Send a message</h3>
						<?php if ( is_active_sidebar( 'contact_form' ) ) : ?>
							<?php dynamic_sidebar( 'contact_form' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div id="about-artist" class="row about">
			<div class="col-l-53">
				<h1><?php echo get_post_meta(get_the_ID(),'_my_title2',TRUE); ?></h1>
				<h5><?php echo get_post_meta(get_the_ID(),'_my_sub-title2',TRUE); ?></h5>
			</div>
			<div class="col-l-106">
				<div class="col-2">
					<?php 
						$about = get_post_meta(get_the_ID(),'_my_about-text',TRUE); 
						echo apply_filters('meta_content', $about );
					?>
				</div>
			</div>
		</div>
		<?php 
			$argsV=array(
			  'post_type' => 'videos',
			  'post_status' => 'publish',
			  'posts_per_page' => -1,
			);
			$videos_query = null;
			$videos_query = new WP_Query($argsV);
		 ?>
		 <?php if ( $videos_query->have_posts() ) : ?>
		 	<div id="about-video" class="row video">
				<div class="col-l-53">
					<h1><?php echo get_post_meta(get_the_ID(),'_my_title-video',TRUE); ?></h1>
					<h5><?php echo get_post_meta(get_the_ID(),'_my_sub-title-video',TRUE); ?></h5>
				</div>
				<div class="col-l-106">
					<div class="row">
			<?php while ( $videos_query->have_posts() ) : $videos_query->the_post(); ?>
						<div class="col-l-8">
							<div class="video-container">
								<?php the_content(); ?>
							</div>
						</div>
			<?php endwhile; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
		<div class="row follow">
			<div class="col-l-53">
				<h1><?php echo get_post_meta(get_the_ID(),'_my_title3',TRUE); ?></h1>
				<h5><?php echo get_post_meta(get_the_ID(),'_my_sub-title3',TRUE); ?></h5>
			</div>
			<div class="col-l-106">
				<div class="row the-follow">
					<?php 
						global $follow_mb;
						$follow_img = get_post_meta(get_the_ID(), $follow_mb->get_the_id(), TRUE);
					 ?>
					<?php 
						foreach ($follow_img['follow'] as $img):
					 ?>
					<div class="col-s-32 col-xs-16">
						<?php 
							$url = $img['follow_img'];
							$link = $img['follow_link']; 
						?>
						<a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $url; ?>" alt=""></a>
					</div>
					<?php endforeach; ?>
					
				</div>
			</div>
		</div>
		<div id="artist-statement" class="row statement">
			<div class="col-l-53">
				<h1><?php echo get_post_meta(get_the_ID(),'_my_title_state',TRUE); ?></h1>
				<h5><?php echo get_post_meta(get_the_ID(),'_my_sub-title_state',TRUE); ?></h5>
			</div>
			<div class="col-l-106">
				<div class="col-2">
					<?php 
						$about = get_post_meta(get_the_ID(),'_my_state-text',TRUE); 
						echo apply_filters('meta_content', $about );
					?>
				</div>
			</div>
		</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
	<?php 
		$args=array(
		  'post_type' => 'page',
		  'post_status' => 'publish',
		  'posts_per_page' => -1,
		  'meta_key'   => '_wp_page_template',
		  'meta_value' => 'testimonials-page.php'
		);
		$testimonials_query = null;
		$testimonials_query = new WP_Query($args);
	 ?>
	 <?php if ( $testimonials_query->have_posts() ) : ?>
		<?php while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post(); ?>
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
			<div class="container-full testimonials">
				<div class="row">
					<div class="col-xs-16">
						<h1><?php the_title(); ?></h1>
						<h5><?php echo get_post_meta(get_the_ID(),'_my_sub-title-testimonials',TRUE); ?></h5>
					</div>
				</div>
				<div class="row">
		<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
	<?php 
		$args=array(
		  'post_type' => 'testimonials',
		  'post_status' => 'publish',
		  'posts_per_page' => -1,
		);
		$testimonials2_query = null;
		$testimonials2_query = new WP_Query($args);
	 ?>
	 <?php if ( $testimonials2_query->have_posts() ) : ?>
		<?php while ( $testimonials2_query->have_posts() ) : $testimonials2_query->the_post(); ?>
			<div class="col-l-53 col-s-8 the-testimonial">
				<h3><?php the_title(); ?><span><?php echo get_post_meta(get_the_ID(),'_my_sub-title-testimonials',TRUE); ?></span></h3>
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
		</div>
	</div>
	<div class="container-full contact2">
		<?php 
			$args=array(
			  'post_type' => 'page',
			  'post_status' => 'publish',
			  'posts_per_page' => -1,
			  'meta_key'   => '_wp_page_template',
    		  'meta_value' => 'links-page.php'
			);
			$links_query = null;
			$links_query = new WP_Query($args);
		 ?>
		 <?php if ( $links_query->have_posts() ) : ?>
			<?php while ( $links_query->have_posts() ) : $links_query->the_post(); ?>
				<div class="row links">
					<div class="col-xs-16">
						<h1><?php the_title(); ?></h1>
						<h5><?php echo get_post_meta(get_the_ID(),'_my_sub-title-links',TRUE); ?></h5>
					</div>
					<div class="col-m-53 col-s-8 the-link">
						<?php 
							$links1 = get_post_meta(get_the_ID(),'_my_links-1',TRUE); 
							echo apply_filters('meta_content', $links1 );
						 ?>
					</div>
					<div class="col-m-53 col-s-8 the-link">
						<?php 
							$links2 = get_post_meta(get_the_ID(),'_my_links-2',TRUE); 
							echo apply_filters('meta_content', $links2 );
						 ?>
					</div>
					<div class="col-m-53 col-s-8 the-link">
						<?php 
							$links3 = get_post_meta(get_the_ID(),'_my_links-3',TRUE); 
							echo apply_filters('meta_content', $links3 );
						 ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
	<div class="container-full contact-bottom">
		<?php quotes_module(); ?>
		<?php modules_module(); ?>
	</div>
<?php get_footer(); ?>
