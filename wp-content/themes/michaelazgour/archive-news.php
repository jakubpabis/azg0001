<?php 
/*
	Template Name: News
*/
 ?>
<?php get_header(); ?>
	<div class="container-full news">
		<?php 
			$args=array(
			  'post_type' => 'news_exhibitions',
			  'post_status' => 'publish',
			  'posts_per_page' => -1,
			);
			$news_query = null;
			$news_query = new WP_Query($args);
		 ?>
		<?php if ( $news_query->have_posts() ) : ?>
			<?php
				while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
					
					<div class="row the-news">
						<div class="col-xl-6 col-l-7 col-xs-16 news-thumb">
							<a href="<?php the_permalink(); ?>">
								<?php
									$thumb_id = get_post_thumbnail_id();
									$thumb_1 = wp_get_attachment_image_src( $thumb_id, 'news_thumb', true );
									$thumb_2 = wp_get_attachment_image_src( $thumb_id, 'news_thumb2', true );
									$thumb_3 = wp_get_attachment_image_src( $thumb_id, 'news_thumb3', true );
									$thumb_4 = wp_get_attachment_image_src( $thumb_id, 'news_thumb4', true );
								?>
								<picture>
									<source srcset="<?php echo $thumb_2[0]; ?>" media="(min-width: 1441px)">
								    <source srcset="<?php echo $thumb_3[0]; ?>" media="(min-width: 1024px)">
								    <source srcset="<?php echo $thumb_1[0]; ?>" media="(min-width: 701px)">
								    <source srcset="<?php echo $thumb_2[0]; ?>" media="(min-width: 541px)">
								    <source srcset="<?php echo $thumb_3[0]; ?>" media="(min-width: 448px)">
								    <source srcset="<?php echo $thumb_4[0]; ?>" media="(max-width: 447px)">
								    <img src="<?php echo $thumb_1[0]; ?>">
								</picture>
							</a>
						</div>
						<div class="col-xl-10 col-l-9 col-xs-16 news-short">
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							<h5>
								<?php
									$date_input = get_post_meta(get_the_ID(), '_my_date_input', TRUE );
									if(!empty($date_input)){
										echo $date_input;
									} else {
										echo get_the_date('F jS, Y'); 
									}
								?>
							</h5> 
							<p class="news-excerpt"><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>" class="buttonB news-more">
								Read More
							</a>
						</div>
					</div>

				<?php endwhile;
			?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
		<?php quotes_module(); ?>
		<?php modules_module(); ?>
	</div>
<?php get_footer(); ?>