<?php 
/*
* Template Name: Paintings
*/
?>
<?php get_header(); ?>
	<div class="sorting in-container">
		<?php years_news_tags_filter(); ?>
	</div>
	<div class="container-full paintings">
		<?php 
		    $args = array(
				'show_option_all'    => null,
				'orderby'            => 'name',
				'order'              => 'DESC',
				'style'              => 'none',
				'show_count'         => 0,
				'hide_empty'         => 1,
				'use_desc_for_title' => 1,
				'child_of'           => 0,
				'feed'               => null,
				'feed_type'          => null,
				'feed_image'         => '',
				'exclude'            => '',
				'exclude_tree'       => '',
				'include'            => '',
				'hierarchical'       => 0,
				'show_option_none'   => __( '' ),
				'number'             => 1,
				'echo'               => 0,
				'depth'              => 0,
				'current_category'   => 0,
				'pad_counts'         => 0,
				'taxonomy'           => 'years',
				'walker'             => null
		    );
		    function getUrlLinkText($url){
			    /*** find the link test ***/
			    preg_match('/\>(.*)<\/a>/', $url, $matches);
			    /*** return the match ***/
			    return $matches[1];
			}
			/*** example usage ***/
			$url = wp_list_categories( $args );
			$year =  getUrlLinkText($url);
		?>
		<?php 
			$args=array(
			  	'post_type' => 'paintings',
			  	'post_status' => 'publish',
			  	'posts_per_page' => -1,
			  	'tax_query' => array(
					array(
						'taxonomy' => 'years',
						'field'    => 'slug',
						'terms'    => $year,
					),
				),
			);
			$paintings_query = null;
			$paintings_query = new WP_Query($args);
			$iteration = 0;
		 ?>
		<?php if ( $paintings_query->have_posts() ) : ?>
			<?php
				while ( $paintings_query->have_posts() ) : $paintings_query->the_post();
					$iteration = $iteration + 1;
					?>
						<?php 
						 	global $paintings_mb;
						 	$meta1 = get_post_meta(get_the_ID(), $paintings_mb->get_the_id(), TRUE);
							$data = $meta1['title'];
							$description = $meta1['description'];
							$sold = $meta1['is_sold'];
							$not_show = $meta1['not_main'];
						?>
						<?php if(!$not_show) : ?>
						<?php 
							$terms = get_the_terms( $post->ID, 'series' );
							if ( !empty( $terms ) ){
							    // get the first term
							    $term = array_shift( $terms );
								$name = $term->name;
								$series_description = $term->description;
							}
						 ?>
						<div class="row" data-series="<?php echo $name; ?>" data-description="<?php echo $series_description; ?>">
							<div class="col-xs-16 the-painting">
								<?php if($iteration <= 3): ?>
								<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true); ?>">
								<?php else: ?>
								<img data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true); ?>">
								<?php endif ?>
								<div class="credits">
									<h3><?php the_title(); ?></h3>
									<p class="technique">
										<?php echo $data; ?>
									</p>
									<p class="charis"> 
										<?php echo $description; ?>
									</p>
									<a href="#" class="more-link" data-title="<?php the_title(); ?>">
										more information
									</a>
								</div>
							</div>
						</div>
						<?php endif; ?>
					<?php
				endwhile;
			?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
	<div class="sorting in-container mobile-only">
		<?php years_news_tags_filter(); ?>
	</div>
	<div class="container-full paintings-down">
		<?php quotes_module(); ?>
		<?php modules_module(); ?>
	</div>
	<div class="upArrow">
		<i class="fa fa-angle-up"></i>
	</div>
	<div class="inquiry-contact">
		<?php if ( is_active_sidebar( 'inquiry_form' ) ) : ?>
			<?php dynamic_sidebar( 'inquiry_form' ); ?>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>
