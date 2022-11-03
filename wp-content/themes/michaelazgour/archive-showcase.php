<?php 
/*
* Template Name: Showcase
*/
?>
<?php get_header(); ?>
	<?php if ( post_password_required() ) : ?>
		<div class="container-full private-page">
			<div class="pass-cont">
				<?php 
					if(!empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {
						the_content();
					}
				?>
			</div>
		</div>
	<?php endif; ?>
	<?php if ( ! post_password_required() ) : ?>
	<div class="container-full paintings">
		<?php 
			// $args=array(
			//   'post_type' => 'showcase',
			//   'post_status' => 'publish',
			//   'posts_per_page' => -1,
			// );
			// $showcase_query = null;
			// $showcase_query = new WP_Query($args);
		 ?>
		<?php if (have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php /*
					global $showcase_input_mb;
					$show_case = get_post_meta(get_the_ID(), $showcase_input_mb->get_the_id(), TRUE);
					foreach ($show_case['showcase_multi'] as $case) : ?>
						<?php 
							$post_c = get_post( $case ); 
							$thumb_c = wp_get_attachment_image_src( get_post_thumbnail_id( $post_c ));
						 ?>
						<div class="row">
							<div class="col-xs-16 the-painting">
								<img src="<?php echo $thumb_c; ?>" alt="">
								<div class="credits">
									<h3><?php the_title(); ?></h3>
									<p class="technique">
										<?php echo $data; ?>
									</p>
									<p class="price">
										Price: $ <?php echo $price; ?>
									</p>
								</div>
							</div>
						</div>
				<?php 
					endforeach; 
				*/?>
				<?php the_permalink(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
	<?php endif; ?>
<?php get_footer(); ?>
