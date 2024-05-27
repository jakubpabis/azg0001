<?php
/*
* Template Name: Taxonomy
*/
?>
<?php get_header(); ?>
<div class="sorting in-container">
	<?php years_news_tags_filter(); ?>
</div>
<div class="container-full paintings">
	<div class="row">
		<div class="col-xs-16 masonry">
			<?php $iteration = 0; ?>
			<?php if (have_posts()) : ?>
				<?php $current_series = false; ?>
				<?php
				while (have_posts()) : the_post();
					$iteration = $iteration + 1;
				?>
					<?php
					global $paintings_mb;
					$meta1 = get_post_meta(get_the_ID(), $paintings_mb->get_the_id(), TRUE);
					$data = isset($meta1['title']) ? $meta1['title'] : false;
					$description = isset($meta1['description']) ? $meta1['description'] : false;
					$sold = isset($meta1['is_sold']) ? $meta1['is_sold'] : false;
					$not_main = isset($meta1['not_main']) ? $meta1['not_main'] : false;
					?>
					<?php if (!$not_main) : ?>
						<?php
						$terms = get_the_terms($post->ID, 'series');
						if (!empty($terms)) {
							// get the first term
							$term = array_shift($terms);
							$name = $term->name;
							$series_description = $term->description;
						}
						/** data-series="<?php echo $name; ?>" data-description="<?php echo $series_description; ?>" */
						?>
						<?php if (!$current_series || $current_series !== $name) : ?>
							<?php if (!!$current_series) : ?>
		</div>
		<div class="col-xs-16 masonry">
		<?php endif; ?>
		<div class="row mx-0">
			<div class="col-m-53 col-xs-16 series-name-mobile">
				<h2 style="margin:0;"><?php echo $name; ?></h2>
			</div>
			<div class="col-m-106 col-xs-16 series-name-mobile">
				<p style="margin:0;"><?php echo $series_description; ?></p>
			</div>
		</div>
	<?php $current_series = $name;
						endif; ?>
	<div class="the-painting">
		<?php
						$image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id());
		?>
		<?php if ($iteration <= 10) : ?>
			<img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">
		<?php else : ?>
			<img data-src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">
		<?php endif ?>
		<?php /* endif; */ ?>
		<?php
						$title = '<h3>' . get_the_title() . '</h3>';
						$technique = $data ? '<p class="technique">' . $data . '</p>' : null;
						$description = $description ? '<p class="charis">' . $description . '</p>' : null;
						if ($sold) {
							$button = '
							<div class="buttonB sold solded">
								Collected
							</div>
						';
						} else {
							$button = '
							<a href="#" class="buttonB sold" data-title="' . get_the_title() . '">
								Available: Inquire
							</a>
						';
						}
						$caption = htmlentities('<div class="credits">' . $title . $technique . $description . $button . '</div>');
		?>
		<div class="the-painting__hover">
			<?php echo $title; ?>
			<?php echo $technique; ?>
			<?php echo $description; ?>
		</div>
		<a href="<?php the_post_thumbnail_url(); ?>" data-fancybox="gallery" data-caption="<?php echo $caption; ?>" class="whole-element-link"></a>
	</div>
<?php endif; ?>
<?php
				endwhile;
?>
<?php endif; ?>
<?php wp_reset_query(); ?>
		</div>
	</div>
</div>
<div class="sorting in-container">
	<?php years_news_tags_filter(); ?>
</div>
<div class="container-full paintings-down">
	<?php
	$term =	$wp_query->queried_object;
	$name = $term->name;
	$args = array(
		'post_type' => 'quotes',
		'post_status' => 'publish',
		'posts_per_page' => 1,
		'meta_query' => array(
			'relation' => 'OR',
			array(
				'key' => '_my_year1',
				'value' => $name,
			),
			array(
				'key' => '_my_year2',
				'value' => $name,
			),
			array(
				'key' => '_my_year3',
				'value' => $name,
			),
			array(
				'key' => '_my_year4',
				'value' => $name,
			),
			array(
				'key' => '_my_year5',
				'value' => $name,
			),
			array(
				'key' => '_my_year6',
				'value' => $name,
			),
			array(
				'key' => '_my_year7',
				'value' => $name,
			),
			array(
				'key' => '_my_year8',
				'value' => $name,
			),
			array(
				'key' => '_my_year9',
				'value' => $name,
			),
			array(
				'key' => '_my_year10',
				'value' => $name,
			),
		),
	);
	$quote_query = null;
	$quote_query = new WP_Query($args);
	if ($quote_query->have_posts()) :
		while ($quote_query->have_posts()) : $quote_query->the_post(); ?>
			<div class="col-xs-16 the-quote">
				<p><?php echo get_the_content(); ?></p>
			</div>
	<?php endwhile;
	endif;
	wp_reset_query();
	?>
	<?php
	$term =	$wp_query->queried_object;
	$name = $term->name;
	$args = array(
		'post_type' => 'modules',
		'post_status' => 'publish',
		'posts_per_page' => 3,
		'meta_query' => array(
			'relation' => 'OR',
			array(
				'key' => '_my_year1',
				'value' => $name,
			),
			array(
				'key' => '_my_year2',
				'value' => $name,
			),
			array(
				'key' => '_my_year3',
				'value' => $name,
			),
			array(
				'key' => '_my_year4',
				'value' => $name,
			),
			array(
				'key' => '_my_year5',
				'value' => $name,
			),
			array(
				'key' => '_my_year6',
				'value' => $name,
			),
			array(
				'key' => '_my_year7',
				'value' => $name,
			),
			array(
				'key' => '_my_year8',
				'value' => $name,
			),
			array(
				'key' => '_my_year9',
				'value' => $name,
			),
			array(
				'key' => '_my_year10',
				'value' => $name,
			),
		),
	);
	$module_query = null;
	$module_query = new WP_Query($args);
	if ($module_query->have_posts()) :
	?><div class="row modules"><?php
															while ($module_query->have_posts()) : $module_query->the_post(); ?>
				<?php
																$thumb_m1 = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'module_thumb');
																$thumb_m12 = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'module_thumb2');
																$thumb_m13 = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'module_thumb3');
																$thumb_m14 = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'module_thumb4');
																$thumb_m15 = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'module_thumb5');
																$thumb_m16 = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'module_thumb6');
				?>
				<div class="col-s-53 col-xs-16 the-module">
					<picture>
						<source srcset="<?php echo $thumb_m1[0]; ?>" media="(min-width: 1441px)">
						<source srcset="<?php echo $thumb_m12[0]; ?>" media="(min-width: 1281px)">
						<source srcset="<?php echo $thumb_m13[0]; ?>" media="(min-width: 1025px)">
						<source srcset="<?php echo $thumb_m14[0]; ?>" media="(min-width: 801px)">
						<source srcset="<?php echo $thumb_m15[0]; ?>" media="(min-width: 641px)">
						<source srcset="<?php echo $thumb_m16[0]; ?>" media="(min-width: 581px)">
						<source srcset="<?php echo $thumb_m14[0]; ?>" media="(max-width: 340px)">
						<source srcset="<?php echo $thumb_m13[0]; ?>" media="(max-width: 420px)">
						<img src="<?php echo $thumb_m1[0]; ?>">
					</picture>
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
					<a href="<?php echo get_post_meta(get_the_ID(), '_my_module_link', TRUE); ?>" <?php if (get_post_meta(get_the_ID(), '_my_is_new_tab', TRUE)) {
																																													echo 'target="_blank"';
																																												} ?>></a>
				</div>
			<?php endwhile;
			?>
		</div><?php
				endif;
				wp_reset_query();
					?>
</div>
<div class="upArrow">
	<i class="fa fa-angle-up"></i>
</div>
<div class="inquiry-contact">
	<?php if (is_active_sidebar('inquiry_form')) : ?>
		<?php dynamic_sidebar('inquiry_form'); ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>