<?php get_header(); ?>
	<div class="container-full news-single painting text-center m767">
		<?php if ( have_posts() ) : ?>
			<?php
				while ( have_posts() ) : the_post(); ?>

					<div class="row news-navigation painting top">
						<div class="col-xs-16">
							<?php 
								the_post_navigation( array(
									'screen_reader_text' => ' ',
									'next_text' =>  __( 'previous painting', 'azgour' ),
									'prev_text' =>  __( 'next painting', 'azgour' ),
								) );
							 ?>
						</div>
					</div>
					<div class="row news-text">
						<div class="col-xs-16 text-center m767">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
					<div class="row news-photos painting text-center m767">
						<div class="col-xs-16 the-photo text-center m767">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="col-xs-16 text-center m767">
							<?php
								global $paintings_mb;
								$meta1 = get_post_meta(get_the_ID(), $paintings_mb->get_the_id(), TRUE);
							   	$data = $meta1['title'];
							?>
							<div class="credits text-center m767">
								<p class="technique">
									<?php echo $data; ?>
								</p>
							</div>
						</div>
						<div class="col-l-3"></div>
						<div class="col-l-10 col-xs-16 news-single-copy painting text-center m767">
							<?php echo get_field( 'single_page_description' ); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-l-3"></div>
						<div class="col-l-10 col-xs-16">
							<a href="#" class="buttonB enquiry" data-title="<?php the_title(); ?>">
								Enquiry
							</a>
						</div>
						<div class="inquiry-contact text-left">
							<?php if ( is_active_sidebar( 'inquiry_form' ) ) : ?>
								<?php dynamic_sidebar( 'inquiry_form' ); ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="row news-navigation painting">
						<div class="col-xs-16">
							<?php 
								the_post_navigation( array(
									'screen_reader_text' => ' ',
									'next_text' =>  __( 'previous painting', 'azgour' ),
									'prev_text' =>  __( 'next painting', 'azgour' ),
								) );
							 ?>
						</div>
					</div>

				<?php endwhile;
			?>
		<?php endif; ?>
		<?php quotes_module(); ?>
	</div>
<?php get_footer( 'single' ); ?>