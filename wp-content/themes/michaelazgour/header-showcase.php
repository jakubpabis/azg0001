<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-28038940-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-28038940-1');
	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
	<link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/sass/style.min.css">
	<script src="https://use.fontawesome.com/2c188634d9.js" async defer></script>
	<?php wp_head(); ?>
</head>
<body <?php if(is_front_page()){body_class( 'frontPage' );} if(wp_is_mobile()){ body_class( 'mobile' );} else{ body_class(); }?>>
<?php 
	if(!is_front_page()){
		get_sidebar('showcase');
	}
 ?>
	<div class="wrapper">