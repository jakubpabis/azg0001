<?php get_header(); ?>
	<div class="container-full news-single">
		<?php if ( have_posts() ) : ?>
			<?php
				while ( have_posts() ) : the_post(); ?>
					
					<div class="row news-text">
						<div class="col-l-8">
							<h1><?php the_title(); ?></h1>
							<?php the_date('F jS, Y', '<h5>', '</h5>'); ?> 
							<div class="news-content"><?php the_content(); ?></div>
							<div class="social-buttons">
								<p>Share this page:</p>
								<a href="" class="facebook" title="share on Facebook"><i class="fa fa-facebook"></i></a>
								<a href="" class="linkedin" title="share on Linkedin"><i class="fa fa-linkedin"></i></a>
								<a href="" class="gplus" title="share on Google+"><i class="fa fa-google-plus"></i></a>
								<a href="" class="twitter" title="share on Twitter"><i class="fa fa-twitter"></i></a>
								<a href="" class="mail" title="share via e-mail"><i class="fa fa-envelope"></i></a>
							</div>
						</div>
					</div>
					<div class="row news-photos">
						<div class="col-xs-16 the-photo">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php 
							$metaimg = get_post_meta(get_the_ID(), '_my_multi_img', TRUE);
							if(!empty($metaimg)){
								$arrayI = explode(',', $metaimg);
								foreach($arrayI as $value)
								{
									echo '<div class="col-xs-16 the-photo">';
								    echo '<img src="'. $value .'" alt="">';
								    echo '</div>';
								}
							}
						 ?>
					</div>
					<div class="row news-navigation">
						<div class="col-xs-16">
							<?php 
								the_post_navigation( array(
									'screen_reader_text' => ' ',
									'next_text' =>  __( 'previous news', 'azgour' ),
									'prev_text' =>  __( 'next news', 'azgour' ),
								) );
							 ?>
						</div>
					</div>

				<?php endwhile;
			?>
		<?php endif; ?>
		<?php quotes_module(); ?>
		<?php modules_module(); ?>
	</div>
<?php get_footer(); ?>