<?php get_header(); ?>
<div class="container-full news-single painting text-center">
	<?php if (have_posts()) : ?>
		<?php
		while (have_posts()) : the_post(); ?>
			<?php
			global $paintings_mb;
			$meta1 = get_post_meta(get_the_ID(), $paintings_mb->get_the_id(), TRUE);
			$data = $meta1['title'] ?? '';
			$sold = $meta1['is_sold'] ?? false;
			$not_show = $meta1['not_main'] ?? false;
			$next_post_id = get_next_post()->ID ?? '';
			$prev_post_id = get_previous_post()->ID ?? '';
			?>
			<div class="row news-text painting">
				<div class="col-m-4 col-l-3 news-text-next">
					<?php if ($next_post_id) : ?>
						<div class="nav-next">
							<a href="<?php echo get_permalink($next_post_id); ?>">Previous</a>
						</div>
					<?php endif; ?>
				</div>
				<div class="col-m-8 col-l-10 text-center m767">
					<h1 class="news-text-title-center"><?php the_title(); ?></h1>
				</div>
				<div class="col-m-4 col-l-3 news-text-prev text-right">
					<?php if ($prev_post_id) : ?>
						<div class="nav-previous">
							<a href="<?php echo get_permalink($prev_post_id); ?>">Next</a>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<?php if (!$not_show) : ?>
				<div class="row news-photos painting text-center">
					<div class="col-xs-16 the-photo text-center">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="col-xs-16 text-center">
						<div class="credits text-center">
							<p class="technique text-center">
								<?php echo $data; ?>
							</p>
						</div>
					</div>
					<div class="col-l-3"></div>
					<?php if (!empty(get_field('single_page_description'))): ?>
						<div class="col-l-10 col-xs-16 news-single-copy painting text-center">
							<?php echo get_field('single_page_description'); ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="row">
					<div class="col-l-3"></div>
					<?php if ($sold) : ?>
						<div class="col-l-10 col-xs-16 text-center">
							<div class="buttonB sold solded">
								Collected
							</div>
						</div>
					<?php else : ?>
						<div class="col-l-10 col-xs-16 text-center">
							<a href="#" class="buttonB sold" data-title="<?php the_title(); ?>">
								Available: Inquire
							</a>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<div class="row news-navigation painting">
				<div class="col-xs-16">
					<?php
					the_post_navigation(array(
						'screen_reader_text' => ' ',
						'next_text' =>  __('previous', 'azgour'),
						'prev_text' =>  __('next', 'azgour'),
					));
					?>
				</div>
			</div>

		<?php endwhile;
		?>
	<?php endif; ?>
	<?php quotes_module(); ?>
</div>
<?php if (!$sold) : ?>
	<div class="inquiry-contact text-left">
		<?php if (is_active_sidebar('inquiry_form')) : ?>
			<?php dynamic_sidebar('inquiry_form'); ?>
		<?php endif; ?>
	</div>
<?php endif; ?>
<?php get_footer('single'); ?>