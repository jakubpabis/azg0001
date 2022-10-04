<nav class="main-navigation">
	<?php get_template_part(get_template_part('partials/nav-logo')); ?>
	<?php
	if (has_nav_menu('main')) :
		wp_nav_menu(array(
			'container'      => false,
			'menu_class'     => 'main-menu',
			'theme_location' => 'main',
			'depth'          => 0,
		));
	endif;
	?>
	<div class="menu-button">
		<span class="line1"></span>
		<span class="line2"></span>
		<span class="line3"></span>
	</div>
	<?php
	if (is_page('paintings') || is_tax()) {
	?>
		<div class="sorting in-menu">
			<?php years_news_tags_filter(); ?>
		</div>
	<?php
	}
	if (is_page_template('single-showcase.php')) {
	?>
		<div class="sorting in-menu">
			<div class="series-name"></div>
		</div>
		<?php
	}
	if (!is_front_page() && !is_tax()) {
		if (is_singular('news_exhibitions')) {
		?>
			<p class="mobile-page-title">
				News + Exhibitions
			</p>
		<?php
		} elseif (is_singular('public_art')) {
		?>
			<p class="mobile-page-title">
				Public Art
			</p>
		<?php
		} else {
		?>
			<p class="mobile-page-title">
				<?php echo get_the_title(); ?>
			</p>
		<?php
		}
	}
	if (is_tax()) {
		?>
		<p class="mobile-page-title">
			Paintings
		</p>
	<?php
	}
	?>

</nav>