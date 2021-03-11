<?php 
/*
* Template Name: Home
*/
?>
<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php
			while ( have_posts() ) : the_post();
				?>
					<?php 
						global $rotator_img_mb;
					 	$rotate = get_post_meta(get_the_ID(), $rotator_img_mb->get_the_id(), TRUE);
					 	shuffle($rotate['rotator']);
					 	foreach($rotate['rotator'] as $img){
					 		$url = $img['imgurl'];
					 	}
					?>
					<div class="home-image" style="background-image: url(<?php echo $url; ?>);">
						<div class="overlayHome"></div>
						<div class="logo">
							<svg version="1.1" id="Warstwa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="290px" height="92px" viewBox="0 0 290 92" enable-background="new 0 0 290 92" xml:space="preserve">
							<path class="path1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M76.7,0.8h-2.3c-0.9,0-2.9,0.4-4.4,0.9l-0.7,0.5c-0.7,0.5-1.9,1.6-2.5,2.1l-0.7,0.5
								c-1.5,0.9-3.4,2.1-4.2,2.8L61,7.9c-0.9,0.5-1.9,1.2-2.5,1.6c-0.7,0.5-2.5,1.9-3.2,2.3c-0.7,0.5-2.8,1.6-3.5,2.3
								c-0.7,0.7-2.1,1.6-2.8,2.1c-0.7,0.5-3.2,1.9-4.4,2.8c-1.2,0.9-3.7,2.8-4.4,3.2C39.4,22.8,21.4,35.7,20,36.4
								c-1.4,0.7-2.5,1.2-3.2,1.9C16,39,14,39.2,13.3,39.7c-0.7,0.5-1.9,1.2-2.5,1.9c-0.7,0.7-1.4,1.4-2.5,2.1C7,44.3,5.9,45,4.9,45.5
								L4,45.9c-1.1,1-2.3,2.4-2.7,3.1c-0.3,0.7-0.6,1.7-0.6,2.2s0.8,0.9,1.9,0.9H6h3.9c1.3,0,5.4-0.7,6.1,0c0.7,0.7,2.8,0.7,3.5,0l0.7-0.7
								c1.3-1,5.6-4.5,9.6-7.8c4-3.2,7.9-6.1,8.6-6.4c0.7-0.3,1.7-0.7,2.2-0.9c0.5-0.3,3.9-2.5,7.5-5.1c3.6-2.5,9.2-6,12.4-7.8
								c3.2-1.7,6.6-3.4,7.5-3.6c1-0.3,2.4-0.7,3.1-0.9c0.8-0.3,1.8-0.4,2.2-0.2c0.4,0.1,1.2,0.4,1.7,0.6c0.5,0.2,0.9,0.9,0.9,1.6v2v1.5
								c0,0.4-0.2,1.1-0.5,1.5c-0.3,0.4-1,1.3-1.6,2c-0.6,0.7-1.7,2.1-2.3,3c-0.6,1,0.1,1.8,1.6,1.8H78h3.4c0.8,0,2,0.5,2.7,1.1
								c0.7,0.6,1.7,1.6,2.3,2.1c0.6,0.5,1.7,1.4,2.4,2.1c0.8,0.6,1.7,1.4,2.1,1.6l0.7,0.7l0.7,0.7c1.1,0.9,3.5,3.5,5.3,5.8
								c1.8,2.3,5.2,6.5,7.6,9.3l0.7,0.7c0.7,0.7,6,6,6.7,6.3l0.7,0.2c1.8,1.5,3.8,3.4,4.5,4.2c0.7,0.8,3.4,2.9,5.9,4.6l0.5,0.7l0.5,0.7
								c1.1,0.5,2.6,0.9,3.2,0.9h1.9c0.4,0,1-0.4,1.3-0.9c0.3-0.5,1.4-1.8,2.3-2.9c1-1.1,1.7-3.2,1.7-4.6c0-1.5-1.2-3.6-2.7-4.6
								c-1.5-1.1-3.6-2.8-4.6-3.7c-1.1-1-2.8-2.4-3.8-3.2c-1-0.8-2.6-2.2-3.5-3c-0.9-0.8-2.7-2.5-3.9-3.7c-1.3-1.2-2.7-2.8-3.2-3.6
								c-0.5-0.8-1.5-1.9-2.2-2.5c-0.7-0.6-1.8-1.8-2.5-2.5c-0.7-0.8-1.4-1.9-1.6-2.4c-0.2-0.6,0.2-1.4,0.8-1.7c0.6-0.4,2.1-1,3.2-1.4
								c1.1-0.4,3.4-0.9,5-1.3c1.6-0.3,3.9-0.6,5.1-0.6s2.7,0.3,3.2,0.6c0.6,0.3,1.6,1.1,2.2,1.6c0.6,0.6,1.6,1.6,2.1,2.4
								c0.5,0.8,1.9,1.9,3,2.5h0.7h0.7c2.3,0.3,5.7,0.5,7.6,0.5l0.7-0.2l0.7-0.2c3.8-2,7-3.9,7.2-4.2c0.2-0.3,0.6-0.8,0.9-1.1
								c0.4-0.4,0.4-1.1,0-1.6c-0.4-0.5-0.8-1.1-0.9-1.2c-0.2-0.1-1.2-0.8-2.4-1.5c-1.1-0.7-2.4-1.6-2.9-2.1c-0.4-0.4-1-1.2-1.3-1.7
								c-0.3-0.5-0.8-1.3-1.3-1.9c-0.4-0.5-1.2-1.1-1.7-1.3c-0.5-0.2-1.9-0.7-3-1h-0.9c-0.9,0-1.6,0-2.5,0.2l-0.9,0.2
								c-1.5,0.4-3.6,0.9-4.6,1.2c-1,0.3-2.5,0.6-3.2,0.7c-0.8,0.1-3.1,0.5-5.1,0.9h-1.2H117c-2.4,0-6.7-0.2-9.5-0.5h-0.7
								c-0.7,0-6.3,0.2-7.4-0.2l-1.2-0.5c-1.4-0.6-3.8-2.9-5.3-5.1L92,17l-0.9-1.2c-1.8-2.7-4.3-6.2-5.6-7.9l-0.5-0.7
								c-0.5-0.7-2.3-1.9-3-2.5c-0.7-0.7-1.6-1.6-2.3-2.1l-0.7-0.5C78.2,1.4,77.1,0.8,76.7,0.8"/>
							<path class="path2" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M175.5,24c-0.5-1-2.3-0.7-4,0.5l-0.5,0.3c-0.5,0.3-4,1.6-4.5,2.1c-0.5,0.5-2.1,1.9-3.1,2.6
								c-1,0.7-3.5,1.7-3.8,2.3l-0.3,0.5c-0.8,1.2-1.9,2.6-2.6,3l1.2,1c1.2,1,2.8,3.8,3,4.3c0.2,0.5,1,2.8,1.4,3.3c0.3,0.5,0.5,1.6,0.9,3
								c0.3,1.4,1,5.6,1.2,6.8c0.2,1.2,0.9,5,0.9,5.6s0.2,2.1,0,3.5c-0.2,1.4-0.2,5.9-0.2,6.4s-0.2,4.2,0.2,5.2c0.3,1,1.7,9,1.7,9.5
								s0.7,1.6,0.7,2.2v0.5c0.2,1.1,0.6,2.3,0.9,2.6c0.3,0.3,0.4,1,0.3,1.6l0.5-3.1c0.5-3.1,1-5,1.4-6.1c0.3-1,1.4-5.9,1.4-7.1
								c0-1.2,1.2-4.9,1.2-6.1c0-1.2,1.4-13.7,1.4-14.8s0.9-19.2,0.9-20.8v-5.1v-2.8V24z"/>
							<path class="path3" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M196.7,23.7c-0.5,0-1.4,0.3-2.3,1.6c-0.9,1.2-1.2,1.9-1.9,2.6l-0.7,0.7c-0.8,1-2,2.6-2.8,3.7v0.5
								c0,0.5-0.7,4,0,4.8c0.7,0.9,6.8,5.9,7.6,5.9c0.9,0,3.6,1.9,3.8,0.9c0.2-1,1.2-4.5,1.6-5.2c0.3-0.7,1.4-2.8,1.6-3.3
								c0.2-0.5,0.3-2.9,0.9-3.1c0.5-0.2,1.4-1.3,1.6-1.8c0.2-0.5,0-1.7,0-2.6c0-0.9-0.5-2.1-1.7-2.3l-1.2-0.2c-1.8-0.3-3.3-0.4-3.3-0.2
								l-1.6-1L196.7,23.7z"/>
							<path class="path4" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M227.9,22.8c-0.3,0-3.2,1.1-3.9,1.7c-0.7,0.6-1.6,1-2.2,1.6c-0.6,0.5-1.7,1.4-2.2,1.7
								c-0.5,0.3-1.3,1-2.2,1.5s-1,0.5-1.2,1c-0.2,0.4-0.6,1.6-0.7,2.6c-0.1,0.9,0.3,2.4,0.9,3.3s1.4,2.2,2.3,2.5c1,0.3,2.5,0.4,2.9,0.7
								c0.4,0.3,1.1,0.5,2.4,0.5c1.2,0,1.8,0.9,3.1,0s2.9-1.4,4-1.8c1.1-0.4,2.3-0.4,3-1.1c0.7-0.7,1.4-0.4,1-2c-0.3-1.6-1-3.6-1.3-4.3
								c-0.3-0.8-0.9-2.5-1.2-3.4c-0.3-0.9-0.4-1.5-0.9-2.3c-0.4-0.8-0.4-0.7-1-1.2c-0.6-0.5-0.6-1-1-0.9C229.4,22.9,227.9,22.8,227.9,22.8
								"/>
							<path class="path5" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M242.8,29.3c-0.5,0.2-1.9,3.4-1.7,3.5c0.1,0.1,1.7,1.3,1.7,1.5c0,0.2,1.4,1.6,1.7,1.6c0.3,0,3.4,0.5,4.4,0.5
								s2.5-0.2,3.6,0c1,0.2,2.9-0.2,4.4-1.3c1.5-1,4.7-3.2,5.6-4.2c0.8-0.9,4.7-4.5,5.7-5.3c0.9-0.8,4.9-4.4,5.6-5
								c0.7-0.6,4.3-3.6,5.1-4.2c0.8-0.6,4.1-3.5,4.8-4.2c0.7-0.7,2.9-2.4,3.6-3.2c0.7-0.8,1.9-2.2,2-2.5c0.1-0.3,0.2-1.6,0-2.1
								c-0.2-0.5-1.4-2.4-2.4-2.4s-4.6,1-5,1.3c-0.3,0.2-3.2,2-3.8,2.8c-0.6,0.8-5.3,3.8-6,4.4c-0.7,0.6-8.6,6.1-10,6.8
								c-1.4,0.7-8.2,4.1-9,4.5c-0.8,0.5-3.2,1.6-5.1,3C246.1,26.1,244.5,28.6,242.8,29.3"/>
							<path class="pathF" fill="#FFFFFF" d="M76.7,0.8h-2.3c-0.9,0-2.9,0.4-4.4,0.9l-0.7,0.5c-0.7,0.5-1.9,1.6-2.5,2.1l-0.7,0.5
								c-1.5,0.9-3.4,2.1-4.2,2.8L61,7.9c-0.9,0.5-1.9,1.2-2.5,1.6c-0.7,0.5-2.5,1.9-3.2,2.3c-0.7,0.5-2.8,1.6-3.5,2.3
								c-0.7,0.7-2.1,1.6-2.8,2.1c-0.7,0.5-3.2,1.9-4.4,2.8c-1.2,0.9-3.7,2.8-4.4,3.2C39.4,22.8,21.4,35.7,20,36.4
								c-1.4,0.7-2.5,1.2-3.2,1.9C16,39,14,39.2,13.3,39.7c-0.7,0.5-1.9,1.2-2.5,1.9c-0.7,0.7-1.4,1.4-2.5,2.1C7,44.3,5.9,45,4.9,45.5
								L4,45.9c-1.1,1-2.3,2.4-2.7,3.1c-0.3,0.7-0.6,1.7-0.6,2.2s0.8,0.9,1.9,0.9H6h3.9c1.3,0,5.4-0.7,6.1,0c0.7,0.7,2.8,0.7,3.5,0l0.7-0.7
								c1.3-1,5.6-4.5,9.6-7.8c4-3.2,7.9-6.1,8.6-6.4c0.7-0.3,1.7-0.7,2.2-0.9c0.5-0.3,3.9-2.5,7.5-5.1c3.6-2.5,9.2-6,12.4-7.8
								c3.2-1.7,6.6-3.4,7.5-3.6c1-0.3,2.4-0.7,3.1-0.9c0.8-0.3,1.8-0.4,2.2-0.2c0.4,0.1,1.2,0.4,1.7,0.6c0.5,0.2,0.9,0.9,0.9,1.6v2v1.5
								c0,0.4-0.2,1.1-0.5,1.5c-0.3,0.4-1,1.3-1.6,2c-0.6,0.7-1.7,2.1-2.3,3c-0.6,1,0.1,1.8,1.6,1.8H78h3.4c0.8,0,2,0.5,2.7,1.1
								c0.7,0.6,1.7,1.6,2.3,2.1c0.6,0.5,1.7,1.4,2.4,2.1c0.8,0.6,1.7,1.4,2.1,1.6l0.7,0.7l0.7,0.7c1.1,0.9,3.5,3.5,5.3,5.8
								c1.8,2.3,5.2,6.5,7.6,9.3l0.7,0.7c0.7,0.7,6,6,6.7,6.3l0.7,0.2c1.8,1.5,3.8,3.4,4.5,4.2c0.7,0.8,3.4,2.9,5.9,4.6l0.5,0.7l0.5,0.7
								c1.1,0.5,2.6,0.9,3.2,0.9h1.9c0.4,0,1-0.4,1.3-0.9c0.3-0.5,1.4-1.8,2.3-2.9c1-1.1,1.7-3.2,1.7-4.6c0-1.5-1.2-3.6-2.7-4.6
								c-1.5-1.1-3.6-2.8-4.6-3.7c-1.1-1-2.8-2.4-3.8-3.2c-1-0.8-2.6-2.2-3.5-3c-0.9-0.8-2.7-2.5-3.9-3.7c-1.3-1.2-2.7-2.8-3.2-3.6
								c-0.5-0.8-1.5-1.9-2.2-2.5c-0.7-0.6-1.8-1.8-2.5-2.5c-0.7-0.8-1.4-1.9-1.6-2.4c-0.2-0.6,0.2-1.4,0.8-1.7c0.6-0.4,2.1-1,3.2-1.4
								c1.1-0.4,3.4-0.9,5-1.3c1.6-0.3,3.9-0.6,5.1-0.6s2.7,0.3,3.2,0.6c0.6,0.3,1.6,1.1,2.2,1.6c0.6,0.6,1.6,1.6,2.1,2.4
								c0.5,0.8,1.9,1.9,3,2.5h0.7h0.7c2.3,0.3,5.7,0.5,7.6,0.5l0.7-0.2l0.7-0.2c3.8-2,7-3.9,7.2-4.2c0.2-0.3,0.6-0.8,0.9-1.1
								c0.4-0.4,0.4-1.1,0-1.6c-0.4-0.5-0.8-1.1-0.9-1.2c-0.2-0.1-1.2-0.8-2.4-1.5c-1.1-0.7-2.4-1.6-2.9-2.1c-0.4-0.4-1-1.2-1.3-1.7
								c-0.3-0.5-0.8-1.3-1.3-1.9c-0.4-0.5-1.2-1.1-1.7-1.3c-0.5-0.2-1.9-0.7-3-1h-0.9c-0.9,0-1.6,0-2.5,0.2l-0.9,0.2
								c-1.5,0.4-3.6,0.9-4.6,1.2c-1,0.3-2.5,0.6-3.2,0.7c-0.8,0.1-3.1,0.5-5.1,0.9h-1.2H117c-2.4,0-6.7-0.2-9.5-0.5h-0.7
								c-0.7,0-6.3,0.2-7.4-0.2l-1.2-0.5c-1.4-0.6-3.8-2.9-5.3-5.1L92,17l-0.9-1.2c-1.8-2.7-4.3-6.2-5.6-7.9l-0.5-0.7
								c-0.5-0.7-2.3-1.9-3-2.5c-0.7-0.7-1.6-1.6-2.3-2.1l-0.7-0.5C78.2,1.4,77.1,0.8,76.7,0.8"/>
							<path class="pathF" fill="#FFFFFF" d="M175.5,24c-0.5-1-2.3-0.7-4,0.5l-0.5,0.3c-0.5,0.3-4,1.6-4.5,2.1c-0.5,0.5-2.1,1.9-3.1,2.6
								c-1,0.7-3.5,1.7-3.8,2.3l-0.3,0.5c-0.8,1.2-1.9,2.6-2.6,3l1.2,1c1.2,1,2.8,3.8,3,4.3c0.2,0.5,1,2.8,1.4,3.3c0.3,0.5,0.5,1.6,0.9,3
								c0.3,1.4,1,5.6,1.2,6.8c0.2,1.2,0.9,5,0.9,5.6s0.2,2.1,0,3.5c-0.2,1.4-0.2,5.9-0.2,6.4s-0.2,4.2,0.2,5.2c0.3,1,1.7,9,1.7,9.5
								s0.7,1.6,0.7,2.2v0.5c0.2,1.1,0.6,2.3,0.9,2.6c0.3,0.3,0.4,1,0.3,1.6l0.5-3.1c0.5-3.1,1-5,1.4-6.1c0.3-1,1.4-5.9,1.4-7.1
								c0-1.2,1.2-4.9,1.2-6.1c0-1.2,1.4-13.7,1.4-14.8s0.9-19.2,0.9-20.8v-5.1v-2.8V24z"/>
							<path class="pathF" fill="#FFFFFF" d="M196.7,23.7c-0.5,0-1.4,0.3-2.3,1.6c-0.9,1.2-1.2,1.9-1.9,2.6l-0.7,0.7c-0.8,1-2,2.6-2.8,3.7v0.5
								c0,0.5-0.7,4,0,4.8c0.7,0.9,6.8,5.9,7.6,5.9c0.9,0,3.6,1.9,3.8,0.9c0.2-1,1.2-4.5,1.6-5.2c0.3-0.7,1.4-2.8,1.6-3.3
								c0.2-0.5,0.3-2.9,0.9-3.1c0.5-0.2,1.4-1.3,1.6-1.8c0.2-0.5,0-1.7,0-2.6c0-0.9-0.5-2.1-1.7-2.3l-1.2-0.2c-1.8-0.3-3.3-0.4-3.3-0.2
								l-1.6-1L196.7,23.7z"/>
							<path class="pathF" fill="#FFFFFF" d="M227.9,22.8c-0.3,0-3.2,1.1-3.9,1.7c-0.7,0.6-1.6,1-2.2,1.6c-0.6,0.5-1.7,1.4-2.2,1.7
								c-0.5,0.3-1.3,1-2.2,1.5s-1,0.5-1.2,1c-0.2,0.4-0.6,1.6-0.7,2.6c-0.1,0.9,0.3,2.4,0.9,3.3s1.4,2.2,2.3,2.5c1,0.3,2.5,0.4,2.9,0.7
								c0.4,0.3,1.1,0.5,2.4,0.5c1.2,0,1.8,0.9,3.1,0s2.9-1.4,4-1.8c1.1-0.4,2.3-0.4,3-1.1c0.7-0.7,1.4-0.4,1-2c-0.3-1.6-1-3.6-1.3-4.3
								c-0.3-0.8-0.9-2.5-1.2-3.4c-0.3-0.9-0.4-1.5-0.9-2.3c-0.4-0.8-0.4-0.7-1-1.2c-0.6-0.5-0.6-1-1-0.9C229.4,22.9,227.9,22.8,227.9,22.8
								"/>
							<path class="pathF" fill="#FFFFFF" d="M242.8,29.3c-0.5,0.2-1.9,3.4-1.7,3.5c0.1,0.1,1.7,1.3,1.7,1.5c0,0.2,1.4,1.6,1.7,1.6c0.3,0,3.4,0.5,4.4,0.5
								s2.5-0.2,3.6,0c1,0.2,2.9-0.2,4.4-1.3c1.5-1,4.7-3.2,5.6-4.2c0.8-0.9,4.7-4.5,5.7-5.3c0.9-0.8,4.9-4.4,5.6-5
								c0.7-0.6,4.3-3.6,5.1-4.2c0.8-0.6,4.1-3.5,4.8-4.2c0.7-0.7,2.9-2.4,3.6-3.2c0.7-0.8,1.9-2.2,2-2.5c0.1-0.3,0.2-1.6,0-2.1
								c-0.2-0.5-1.4-2.4-2.4-2.4s-4.6,1-5,1.3c-0.3,0.2-3.2,2-3.8,2.8c-0.6,0.8-5.3,3.8-6,4.4c-0.7,0.6-8.6,6.1-10,6.8
								c-1.4,0.7-8.2,4.1-9,4.5c-0.8,0.5-3.2,1.6-5.1,3C246.1,26.1,244.5,28.6,242.8,29.3"/>
							</svg>
							<div class="overflow">
								<p>Michael Azgour | Artist</p>
							</div>
						</div>
						<?php 
							if(!wp_is_mobile()):?>
								<div class="scroll">
									<svg version="1.1" id="Warstwa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 width="56px" height="65px" viewBox="0 0 56 65" enable-background="new 0 0 56 65" xml:space="preserve">
									<path fill="#FFFFFF" d="M28,43.5c-7.8,0-14.1-6.3-14.1-14.1V14.1C13.9,6.3,20.2,0,28,0s14.1,6.3,14.1,14.1v15.3
										C42.1,37.2,35.8,43.5,28,43.5 M28,1.9c-6.7,0-12.2,5.5-12.2,12.2v15.3c0,6.7,5.5,12.2,12.2,12.2s12.2-5.5,12.2-12.2V14.1
										C40.2,7.4,34.8,1.9,28,1.9"/>
									<path class="circ" fill="#FFFFFF" d="M31.6,18.1c0,1.9-1.6,3.5-3.5,3.5c-1.9,0-3.5-1.6-3.5-3.5c0-1.9,1.6-3.5,3.5-3.5
										C30,14.5,31.6,16.1,31.6,18.1"/>
									<path fill="#FFFFFF" d="M6.8,57.2c-0.8-0.7-1.7-1.1-3-1.1c-2,0-3.1,1.1-3.1,2.4c0,1,0.7,2,1.9,2.4l1.6,0.4c0.8,0.2,1.1,0.5,1.1,1
										c0,0.7-0.6,1.2-1.6,1.2c-0.9,0-1.8-0.3-2.4-1.1l-1.1,0.9c0.8,1,2.1,1.5,3.4,1.5c2.1,0,3.3-1.2,3.3-2.6c0-1.1-0.7-2-2.2-2.4l-1.4-0.3
										c-0.8-0.2-1-0.6-1-1.1c0-0.7,0.5-1.1,1.4-1.1c0.7,0,1.4,0.3,2.1,0.8L6.8,57.2z M16.6,62.4c-0.7,0.8-1.5,1.1-2.4,1.1
										c-1.6,0-2.9-1.4-2.9-3c0-1.7,1.3-3,2.9-3c0.9,0,1.6,0.2,2.4,1l1.1-1c-1-1.1-2.1-1.4-3.4-1.4c-2.5,0-4.5,1.9-4.5,4.5
										c0,2.8,2.2,4.4,4.4,4.4c1.6,0,2.6-0.5,3.5-1.6L16.6,62.4z M21.9,61.7c0.6,0.1,1.2,0.1,1.5,0.1h0.1l2,2.9h1.6v-0.2l-2.1-3
										c1-0.4,1.8-1.3,1.8-2.6c0-1.8-1.2-2.7-3.2-2.7h-3.1v8.6H22v-3.1H21.9z M23.6,57.5c1,0,1.6,0.5,1.6,1.4c0,1-0.5,1.6-2.1,1.6
										c-0.3,0-0.8,0-1.2-0.1v-2.8h1.7V57.5z M31.3,60.4c0-1.7,1.3-3.1,2.9-3.1c1.6,0,2.9,1.4,2.9,3.1s-1.3,3.1-2.9,3.1
										C32.6,63.5,31.3,62.2,31.3,60.4 M29.7,60.5c0,2.5,2.1,4.4,4.4,4.4c2.4,0,4.5-1.9,4.5-4.5c0-2.5-2-4.4-4.4-4.4
										C31.7,56,29.7,57.9,29.7,60.5 M41.9,56.2v8.6h5.6v-1.4h-4.1v-7.2H41.9z M50.2,56.2v8.6h5.6v-1.4h-4.1v-7.2H50.2z"/>
									</svg>
								</div>
						 	<?php endif;
						 ?>
					</div>

					<?php get_sidebar(); ?>

					<?php if( get_field('slider') ): ?>
						<div class="home-swiper">
							<!-- Slider main container -->
							<div class="swiper-container">
								<!-- Additional required wrapper -->
								<div class="swiper-wrapper">
									<!-- Slides -->
									<?php foreach( get_field('slider') as $slide ): ?>
									<div class="swiper-slide">
										<img src="<?php echo $slide['image']['url']; ?>" alt="<?php echo $slide['image']['title']; ?>">
										<?php if( $slide['text'] ): ?>
											<div class="swiper-slide-text">
												<?php echo $slide['text']; ?>
											</div>
										<?php endif; ?>
										<?php if( $slide['link_to'] ): ?>
											<a href="<?php echo $slide['link_to']['url']; ?>" class="whole-element-link" target="<?php echo $slide['link_to']['target']; ?>"></a>
										<?php endif; ?>
									</div>
									<?php endforeach; ?>
								</div>
								<!-- If we need pagination -->
								<div class="swiper-pagination"></div>
							</div>
						</div>
					<?php elseif( get_field('image_desktop') ): ?>
						<a href="<?php $thumb_id = get_post_thumbnail_id(); echo get_post($thumb_id)->post_content; ?>">
							<picture>
								<?php if(get_field('image_desktop') && get_field('image_mobile')) : ?>
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
								<a href="<?php esc_url( get_site_url() ) ?>/about-contact#about-artist" class="buttonB">
									Read More
								</a>
							</div>
						</div>
					</div>

					<?php /* <div class="container-full home-page">
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
					</div> */ ?>

				<?php
			endwhile;
		?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
	<?php quotes_module(); ?>
	<?php modules_module(); ?>
</div>
<?php get_footer(); ?>