<?php 
/*
* Template Name: Private
*/
?>
<?php get_header('showcase'); ?>
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
	<?php if(have_posts()) : while(have_posts()) : the_post(); 
		$titleP = get_the_content(); 
		endwhile; endif;?>
	<div class="container-full paintings private-paintings">
		<?php 
			$args=array(
			  'post_type' => 'paintings',
			  'post_status' => 'publish',
			  'posts_per_page' => -1,
			);
			$paintings_query = null;
			$paintings_query = new WP_Query($args);
		 ?>
		<?php if ( $paintings_query->have_posts() ) : ?>
			<?php
				while ( $paintings_query->have_posts() ) : $paintings_query->the_post();
					?>
						<?php 
							global $paintings_mb;
						 	$meta1 = get_post_meta(get_the_ID(), $paintings_mb->get_the_id(), TRUE);
							$data = $meta1['title'];
							$description = $meta1['description'];
							$sold = $meta1['is_sold'];
							$private = $meta1['is_private'];
							$price = $meta1['price'];
						?>
						<?php if($private) : ?>
						<div class="row" data-series="<?php echo $titleP; ?>">
							<div class="col-xs-16 the-painting">
								<?php the_post_thumbnail(); ?>
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
						<?php endif;?>
					<?php
				endwhile;
			?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
	<?php endif; ?>
	<div class="upArrow">
		<i class="fa fa-angle-up"></i>
	</div>
<?php get_footer(); ?>
