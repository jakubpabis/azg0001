<?php 
/*
* Template Name: In Situ
*/
 ?>
 <?php get_header(); ?>
	<div class="container-full news-single">
		<?php if ( have_posts() ) : ?>
			<?php
				while ( have_posts() ) : the_post(); ?>
					<div class="row news-text">
						<div class="col-xxl-8 col-xl-9 col-l-10 col-m-12 col-xs-16">
							<article>
								<h1><?php the_title(); ?></h1>
								<div class="news-content">
									<?php the_content(); ?>
								</div>
							</article>
						</div>
					</div>
				<?php endwhile;
			?>
		<?php endif; ?>
		<?php quotes_module(); ?>
		<?php modules_module(); ?>
	</div>
<?php get_footer(); ?>