<?php
/*
Template Name: single-showcase.php
*/
?>
<?php get_header('showcase'); ?>
<style>
	.the-quote {
		margin-top: 0;
	}

	.the-quote * {
		max-width: 100%;
		margin: 0;
		text-align: left;
		color: black;
	}
</style>
<?php if (post_password_required()) : ?>
	<div class="container-full private-page">
		<div class="pass-cont">
			<?php
			if (!empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {
				the_content();
			}
			?>
		</div>
	</div>
<?php endif; ?>
<?php if (!post_password_required()) : ?>
	<div class="container-full paintings">
		<?php if (have_posts()) : ?>
			<?php $the_title = get_field('title');
			if ($the_title) : ?>
				<div class="row" data-series="Available Works: Perceptualism">
					<div class="col-m-53 col-xs-16 series-name-mobile">
						<h2 style="margin:0;"><?php echo $the_title; ?></h2>
					</div>
				</div>
			<?php endif; ?>
			<?php if (get_field('text')) : ?>
				<div class="col-xs-16 the-quote">
					<?php echo get_field('text'); ?>
				</div>
			<?php endif; ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php
				global $showcase_input_mb;
				$show_case = get_post_meta(get_the_ID(), $showcase_input_mb->get_the_id(), TRUE);
				foreach ($show_case['showcase_multi'] as $case) : ?>
					<?php
					global $paintings_mb;
					$post_c = get_post($case['showcase']);
					$thumb_c = wp_get_attachment_image_src(get_post_thumbnail_id($post_c));
					$title_c = $post_c->post_title;
					$metaC = get_post_meta($case['showcase'], $paintings_mb->get_the_id(), TRUE);
					?>
					<?php if ($case['showcase'] !== "none") : ?>
						<div class="row" data-series="<?php echo $the_title ? null : the_title(); ?>">
							<div class="col-xs-16 the-painting">
								<img src="<?php echo $thumb_c[0]; ?>" alt="">
								<div class="credits">
									<h3><?php echo $title_c; ?></h3>
									<p class="technique">
										<?php echo $metaC['title']; ?>
									</p>
									<p class="charis">
										<?php echo $metaC['description']; ?>
									</p>
									<?php if ($metaC['price']) : ?>
										<p class="price">
											Price: $ <?php echo $metaC['price']; ?>
										</p>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endif; ?>
				<?php
				endforeach;
				?>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
<?php endif; ?>
<div class="upArrow">
	<i class="fa fa-angle-up"></i>
</div>
<?php get_footer(); ?>