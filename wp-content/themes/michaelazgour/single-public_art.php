<?php get_header(); ?>
	<div class="container-full news-single">
		<?php if ( have_posts() ) : ?>
			<?php
				while ( have_posts() ) : the_post(); ?>
					
					<div class="row news-text">
						<div class="col-xxl-8 col-xl-9 col-l-10 col-m-12 col-xs-16">
							<article>
								<h1><?php the_title(); ?></h1>
								<?php
									$date_input = get_post_meta(get_the_ID(), '_my_date_input', TRUE );
									if(!empty($date_input)){
										echo '<h5>' . $date_input . '</h5>';
									} else {
										echo the_date('F jS, Y', '<h5>', '</h5>');
									}
								?>
								<div class="news-content"><?php the_content(); ?></div>
							</article>
						</div>
					</div>
					<div class="row news-photos first">
						<div class="the-photo big">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php 
							$metaimg1 = get_post_meta(get_the_ID(), '_my_multi_img1', TRUE);
							$metaimg2 = get_post_meta(get_the_ID(), '_my_multi_img2', TRUE);
							$metaimg3 = get_post_meta(get_the_ID(), '_my_multi_img3', TRUE);
							$metaimg4 = get_post_meta(get_the_ID(), '_my_multi_img4', TRUE);
							$metaimg5 = get_post_meta(get_the_ID(), '_my_multi_img5', TRUE);
							$metaimg6 = get_post_meta(get_the_ID(), '_my_multi_img6', TRUE);
							$metaimg7 = get_post_meta(get_the_ID(), '_my_multi_img7', TRUE);
							$metaimg8 = get_post_meta(get_the_ID(), '_my_multi_img8', TRUE);
							$metaimg9 = get_post_meta(get_the_ID(), '_my_multi_img9', TRUE);
							$metaimg10 = get_post_meta(get_the_ID(), '_my_multi_img10', TRUE);
							$metaimg11 = get_post_meta(get_the_ID(), '_my_multi_img11', TRUE);
							$metaimg12 = get_post_meta(get_the_ID(), '_my_multi_img12', TRUE);
							$metaimg13 = get_post_meta(get_the_ID(), '_my_multi_img13', TRUE);
							$caption1 = get_post_meta(get_the_ID(), '_my_caption1', TRUE );
							$caption2 = get_post_meta(get_the_ID(), '_my_caption2', TRUE );
							$caption3 = get_post_meta(get_the_ID(), '_my_caption3', TRUE );
							$caption4 = get_post_meta(get_the_ID(), '_my_caption4', TRUE );
							$caption5 = get_post_meta(get_the_ID(), '_my_caption5', TRUE );
							$caption6 = get_post_meta(get_the_ID(), '_my_caption6', TRUE );
							$caption7 = get_post_meta(get_the_ID(), '_my_caption7', TRUE );
							$caption8 = get_post_meta(get_the_ID(), '_my_caption8', TRUE );
							$caption9 = get_post_meta(get_the_ID(), '_my_caption9', TRUE );
							$caption10 = get_post_meta(get_the_ID(), '_my_caption10', TRUE );
							$caption11 = get_post_meta(get_the_ID(), '_my_caption11', TRUE );
							$caption12 = get_post_meta(get_the_ID(), '_my_caption12', TRUE );
							$caption13 = get_post_meta(get_the_ID(), '_my_caption13', TRUE );
							if(!empty($metaimg1)){
								$doc1 = new DOMDocument();
								$doc1->loadHTML($metaimg1);
								$count1 = 1;
								foreach ($doc1->getElementsByTagName('img') as $img){
									if($count1 === 1){
										echo '<div class="flexin">';
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count1++;
									} elseif($count1 === 2){
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
								    	echo '</div>';
									}
								}
							} else {
								echo '</div>';
							}
							if(!empty($caption1)){
								echo '<div class="row news-caption">';
								echo '<div class="col-xs-16">';
								echo '<p>';
								echo $caption1;
								echo '</p>';
								echo '</div>';
								echo '</div>';
							}
							if(!empty($metaimg2)){
								$doc2 = new DOMDocument();
								$doc2->loadHTML($metaimg2);
								$count2 = 0;
								foreach ($doc2->getElementsByTagName('img') as $img){
									if($count2 === 0){
										echo '<div class="row news-photos">';
										echo '<div class="flexin">';
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count2++;
									} elseif($count2 === 1){
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
										$count2++;
									} elseif($count2 === 2){
										echo '<div class="the-photo big">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
									}
								}
							}
							if(!empty($caption2)){
								echo '<div class="row news-caption">';
								echo '<div class="col-xs-16">';
								echo '<p>';
								echo $caption2;
								echo '</p>';
								echo '</div>';
								echo '</div>';
							}
							if(!empty($metaimg3)){
								$doc3 = new DOMDocument();
								$doc3->loadHTML($metaimg3);
								$count3 = 0;
								foreach ($doc3->getElementsByTagName('img') as $img){
									if($count3 === 0){
										echo '<div class="row news-photos">';
										echo '<div class="the-photo big">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count3++;
									} elseif($count3 === 1){
										echo '<div class="flexin">';
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count3++;
									} elseif($count3 === 2){
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
								    	echo '</div>';
									}
								}
							}
							if(!empty($caption3)){
								echo '<div class="row news-caption">';
								echo '<div class="col-xs-16">';
								echo '<p>';
								echo $caption3;
								echo '</p>';
								echo '</div>';
								echo '</div>';
							}
							if(!empty($metaimg4)){
								$doc4 = new DOMDocument();
								$doc4->loadHTML($metaimg4);
								$count4 = 0;
								foreach ($doc4->getElementsByTagName('img') as $img){
									if($count4 === 0){
										echo '<div class="row news-photos">';
										echo '<div class="flexin">';
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count4++;
									} elseif($count4 === 1){
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
										$count4++;
									} elseif($count4 === 2){
										echo '<div class="the-photo big">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
									}
								}
							}
							if(!empty($caption4)){
								echo '<div class="row news-caption">';
								echo '<div class="col-xs-16">';
								echo '<p>';
								echo $caption4;
								echo '</p>';
								echo '</div>';
								echo '</div>';
							}
							if(!empty($metaimg5)){
								$doc5 = new DOMDocument();
								$doc5->loadHTML($metaimg5);
								$count5 = 0;
								foreach ($doc5->getElementsByTagName('img') as $img){
									if($count5 === 0){
										echo '<div class="row news-photos">';
										echo '<div class="the-photo big">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count5++;
									} elseif($count5 === 1){
										echo '<div class="flexin">';
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count5++;
									} elseif($count5 === 2){
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
								    	echo '</div>';
									}
								}
							}
							if(!empty($caption5)){
								echo '<div class="row news-caption">';
								echo '<div class="col-xs-16">';
								echo '<p>';
								echo $caption5;
								echo '</p>';
								echo '</div>';
								echo '</div>';
							}
							if(!empty($metaimg6)){
								$doc6 = new DOMDocument();
								$doc6->loadHTML($metaimg6);
								$count6 = 0;
								foreach ($doc6->getElementsByTagName('img') as $img){
									if($count6 === 0){
										echo '<div class="row news-photos">';
										echo '<div class="flexin">';
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count6++;
									} elseif($count6 === 1){
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
										$count6++;
									} elseif($count6 === 2){
										echo '<div class="the-photo big">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
									}
								}
							}
							if(!empty($caption6)){
								echo '<div class="row news-caption">';
								echo '<div class="col-xs-16">';
								echo '<p>';
								echo $caption6;
								echo '</p>';
								echo '</div>';
								echo '</div>';
							}
							if(!empty($metaimg7)){
								$doc7 = new DOMDocument();
								$doc3->loadHTML($metaimg7);
								$count7 = 0;
								foreach ($doc7->getElementsByTagName('img') as $img){
									if($count7 === 0){
										echo '<div class="row news-photos">';
										echo '<div class="the-photo big">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count7++;
									} elseif($count7 === 1){
										echo '<div class="flexin">';
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count7++;
									} elseif($count7 === 2){
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
								    	echo '</div>';
									}
								}
							}
							if(!empty($caption7)){
								echo '<div class="row news-caption">';
								echo '<div class="col-xs-16">';
								echo '<p>';
								echo $caption7;
								echo '</p>';
								echo '</div>';
								echo '</div>';
							}
							if(!empty($metaimg8)){
								$doc8 = new DOMDocument();
								$doc8->loadHTML($metaimg8);
								$count8 = 0;
								foreach ($doc8->getElementsByTagName('img') as $img){
									if($count8 === 0){
										echo '<div class="row news-photos">';
										echo '<div class="flexin">';
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count8++;
									} elseif($count8 === 1){
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
										$count8++;
									} elseif($count8 === 2){
										echo '<div class="the-photo big">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
									}
								}
							}
							if(!empty($caption8)){
								echo '<div class="row news-caption">';
								echo '<div class="col-xs-16">';
								echo '<p>';
								echo $caption8;
								echo '</p>';
								echo '</div>';
								echo '</div>';
							}
							if(!empty($metaimg9)){
								$doc9 = new DOMDocument();
								$doc9->loadHTML($metaimg9);
								$count9 = 0;
								foreach ($doc9->getElementsByTagName('img') as $img){
									if($count9 === 0){
										echo '<div class="row news-photos">';
										echo '<div class="the-photo big">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count9++;
									} elseif($count9 === 1){
										echo '<div class="flexin">';
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count9++;
									} elseif($count9 === 2){
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
								    	echo '</div>';
									}
								}
							}
							if(!empty($caption9)){
								echo '<div class="row news-caption">';
								echo '<div class="col-xs-16">';
								echo '<p>';
								echo $caption9;
								echo '</p>';
								echo '</div>';
								echo '</div>';
							}
							if(!empty($metaimg10)){
								$doc10 = new DOMDocument();
								$doc10->loadHTML($metaimg10);
								$count10 = 0;
								foreach ($doc10->getElementsByTagName('img') as $img){
									if($count10 === 0){
										echo '<div class="row news-photos">';
										echo '<div class="flexin">';
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count10++;
									} elseif($count10 === 1){
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
										$count10++;
									} elseif($count10 === 2){
										echo '<div class="the-photo big">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
									}
								}
							}
							if(!empty($caption10)){
								echo '<div class="row news-caption">';
								echo '<div class="col-xs-16">';
								echo '<p>';
								echo $caption10;
								echo '</p>';
								echo '</div>';
								echo '</div>';
							}
							if(!empty($metaimg11)){
								$doc11 = new DOMDocument();
								$doc11->loadHTML($metaimg11);
								$count11 = 0;
								foreach ($doc11->getElementsByTagName('img') as $img){
									if($count11 === 0){
										echo '<div class="row news-photos">';
										echo '<div class="the-photo big">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count11++;
									} elseif($count11 === 1){
										echo '<div class="flexin">';
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count11++;
									} elseif($count11 === 2){
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
								    	echo '</div>';
									}
								}
							}
							if(!empty($caption11)){
								echo '<div class="row news-caption">';
								echo '<div class="col-xs-16">';
								echo '<p>';
								echo $caption11;
								echo '</p>';
								echo '</div>';
								echo '</div>';
							}
							if(!empty($metaimg12)){
								$doc12 = new DOMDocument();
								$doc12->loadHTML($metaimg12);
								$count12 = 0;
								foreach ($doc12->getElementsByTagName('img') as $img){
									if($count12 === 0){
										echo '<div class="row news-photos">';
										echo '<div class="flexin">';
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count12++;
									} elseif($count12 === 1){
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
										$count12++;
									} elseif($count12 === 2){
										echo '<div class="the-photo big">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
									}
								}
							}
							if(!empty($caption12)){
								echo '<div class="row news-caption">';
								echo '<div class="col-xs-16">';
								echo '<p>';
								echo $caption12;
								echo '</p>';
								echo '</div>';
								echo '</div>';
							}
							if(!empty($metaimg13)){
								$doc13 = new DOMDocument();
								$doc13->loadHTML($metaimg13);
								$count13 = 0;
								foreach ($doc13->getElementsByTagName('img') as $img){
									if($count13 === 0){
										echo '<div class="row news-photos">';
										echo '<div class="the-photo big">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count13++;
									} elseif($count13 === 1){
										echo '<div class="flexin">';
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
										$count13++;
									} elseif($count13 === 2){
										echo '<div class="the-photo small">';
										echo '<img src="'.$img->getAttribute('src').'" alt="">';
								    	echo '</div>';
								    	echo '</div>';
								    	echo '</div>';
									}
								}
							}
							if(!empty($caption13)){
								echo '<div class="row news-caption">';
								echo '<div class="col-xs-16">';
								echo '<p>';
								echo $caption13;
								echo '</p>';
								echo '</div>';
								echo '</div>';
							}
						 ?>
					<div class="row">
						<div class="col-xs-16">
							<div class="social-buttons">
								<p>Share this page:</p>
								<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" class="facebook" title="share on Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php the_title(); ?>&summary=&<?php echo get_permalink(); ?>" class="linkedin" title="share on Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
								<a href="https://twitter.com/home?status=<?php echo get_permalink(); ?>" class="twitter" title="share on Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
								<a href="mailto:?subject=<?php the_title(); ?>&body=<?php echo get_permalink(); ?>" class="mail" title="share via e-mail"><i class="fa fa-envelope"></i></a>
							</div>
						</div>
					</div>
					<div class="row news-navigation">
						<div class="col-xs-16">
							<?php 
								the_post_navigation( array(
									'screen_reader_text' => ' ',
									'next_text' =>  __( 'previous project', 'azgour' ),
									'prev_text' =>  __( 'next project', 'azgour' ),
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