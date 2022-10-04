<?php
/*
* Template Name: Home
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<?php
	while (have_posts()) : the_post();
	?>
		<?php
		global $rotator_img_mb;
		$rotate = get_post_meta(get_the_ID(), $rotator_img_mb->get_the_id(), TRUE);
		shuffle($rotate['rotator']);
		foreach ($rotate['rotator'] as $img) {
			$url = $img['imgurl'];
		}
		?>
		<div class="home-image" style="background-image: url(<?php echo $url; ?>);">
			<div class="overlayHome"></div>
			<?php get_template_part('partials/header-logo'); ?>
			<?php
			if (!wp_is_mobile()) : ?>
				<div class="scroll">
					<svg version="1.1" id="Warstwa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="56px" height="65px" viewBox="0 0 56 65" enable-background="new 0 0 56 65" xml:space="preserve">
						<path fill="#FFFFFF" d="M28,43.5c-7.8,0-14.1-6.3-14.1-14.1V14.1C13.9,6.3,20.2,0,28,0s14.1,6.3,14.1,14.1v15.3
										C42.1,37.2,35.8,43.5,28,43.5 M28,1.9c-6.7,0-12.2,5.5-12.2,12.2v15.3c0,6.7,5.5,12.2,12.2,12.2s12.2-5.5,12.2-12.2V14.1
										C40.2,7.4,34.8,1.9,28,1.9" />
						<path class="circ" fill="#FFFFFF" d="M31.6,18.1c0,1.9-1.6,3.5-3.5,3.5c-1.9,0-3.5-1.6-3.5-3.5c0-1.9,1.6-3.5,3.5-3.5
										C30,14.5,31.6,16.1,31.6,18.1" />
						<path fill="#FFFFFF" d="M6.8,57.2c-0.8-0.7-1.7-1.1-3-1.1c-2,0-3.1,1.1-3.1,2.4c0,1,0.7,2,1.9,2.4l1.6,0.4c0.8,0.2,1.1,0.5,1.1,1
										c0,0.7-0.6,1.2-1.6,1.2c-0.9,0-1.8-0.3-2.4-1.1l-1.1,0.9c0.8,1,2.1,1.5,3.4,1.5c2.1,0,3.3-1.2,3.3-2.6c0-1.1-0.7-2-2.2-2.4l-1.4-0.3
										c-0.8-0.2-1-0.6-1-1.1c0-0.7,0.5-1.1,1.4-1.1c0.7,0,1.4,0.3,2.1,0.8L6.8,57.2z M16.6,62.4c-0.7,0.8-1.5,1.1-2.4,1.1
										c-1.6,0-2.9-1.4-2.9-3c0-1.7,1.3-3,2.9-3c0.9,0,1.6,0.2,2.4,1l1.1-1c-1-1.1-2.1-1.4-3.4-1.4c-2.5,0-4.5,1.9-4.5,4.5
										c0,2.8,2.2,4.4,4.4,4.4c1.6,0,2.6-0.5,3.5-1.6L16.6,62.4z M21.9,61.7c0.6,0.1,1.2,0.1,1.5,0.1h0.1l2,2.9h1.6v-0.2l-2.1-3
										c1-0.4,1.8-1.3,1.8-2.6c0-1.8-1.2-2.7-3.2-2.7h-3.1v8.6H22v-3.1H21.9z M23.6,57.5c1,0,1.6,0.5,1.6,1.4c0,1-0.5,1.6-2.1,1.6
										c-0.3,0-0.8,0-1.2-0.1v-2.8h1.7V57.5z M31.3,60.4c0-1.7,1.3-3.1,2.9-3.1c1.6,0,2.9,1.4,2.9,3.1s-1.3,3.1-2.9,3.1
										C32.6,63.5,31.3,62.2,31.3,60.4 M29.7,60.5c0,2.5,2.1,4.4,4.4,4.4c2.4,0,4.5-1.9,4.5-4.5c0-2.5-2-4.4-4.4-4.4
										C31.7,56,29.7,57.9,29.7,60.5 M41.9,56.2v8.6h5.6v-1.4h-4.1v-7.2H41.9z M50.2,56.2v8.6h5.6v-1.4h-4.1v-7.2H50.2z" />
					</svg>
				</div>
			<?php endif;
			?>
		</div>

		<?php get_sidebar(); ?>

		<?php if (get_field('slider')) : ?>
			<div class="home-swiper">
				<!-- Slider main container -->
				<div class="swiper-container">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<?php foreach (get_field('slider') as $slide) : ?>
							<div class="swiper-slide">
								<img src="<?php echo $slide['image']['url']; ?>" alt="<?php echo $slide['image']['title']; ?>">
								<?php if ($slide['text']) : ?>
									<div class="swiper-slide-text">
										<?php echo $slide['text']; ?>
									</div>
								<?php endif; ?>
								<?php if ($slide['link_to']) : ?>
									<a href="<?php echo $slide['link_to']['url']; ?>" class="whole-element-link" target="<?php echo $slide['link_to']['target']; ?>"></a>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
					</div>
					<!-- If we need pagination -->
					<div class="swiper-pagination"></div>
				</div>
			</div>
		<?php elseif (get_field('image_desktop')) : ?>
			<a href="<?php $thumb_id = get_post_thumbnail_id();
								echo get_post($thumb_id)->post_content; ?>">
				<picture>
					<?php if (get_field('image_desktop') && get_field('image_mobile')) : ?>
						<source srcset="<?= get_field('image_desktop')['url']; ?>" media="(min-width: 801px)">
						<source srcset="<?= get_field('image_mobile')['url']; ?>" media="(min-width: 1px)">
						<img src="<?= get_field('image_desktop')['url']; ?>">
					<?php else : ?>
						<?php
						$thumb1 = wp_get_attachment_image_src($thumb_id, 'full_size', true);
						$thumb2 = wp_get_attachment_image_src($thumb_id, 'full_sizeM', true);
						$thumb3 = wp_get_attachment_image_src($thumb_id, 'full_sizeS', true);
						?>
						<source srcset="<?php echo $thumb1[0]; ?>" media="(min-width: 801px)">
						<source srcset="<?php echo $thumb2[0]; ?>" media="(min-width: 581px)">
						<source srcset="<?php echo $thumb3[0]; ?>" media="(max-width: 580px)">
						<img src="<?php echo $thumb1[0]; ?>">
					<?php endif; ?>
				</picture>
			</a>
		<?php endif; ?>

		<div class="container-full home-page">
			<div class="row home-about">
				<div class="col-m-53">
					<h1>
						About the artist
					</h1>
					<h5>
						Michael azgour
					</h5>
				</div>
				<div class="col-m-106">
					<div class="col-2">
						<?php the_content(); ?>
					</div>
					<a href="<?php esc_url(get_site_url()) ?>/about-contact#about-artist" class="buttonB">
						Read More
					</a>
				</div>
			</div>
		</div>

		<!--<div class="container-full home-page">
						<div class="row home-about">
							<div class="col-m-53">
								<h1>
									Virtual Gallery
								</h1>
								<h5>
									Recent Paintings
								</h5>
							</div>
							<div class="col-m-106">
								<div class="embed-container">
									<iframe width="100%" src="https://www.artsteps.com/embed/5f8479af39160b3754715df4/560/315" frameborder="0" allowfullscreen></iframe>	
								</div>
							</div>
						</div>
					</div>-->

	<?php
	endwhile;
	?>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php quotes_module(); ?>
<?php modules_module(); ?>
</div>
<?php get_footer(); ?>