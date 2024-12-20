<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-28038940-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-28038940-1');
	</script>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:url" content="<?php echo get_permalink(); ?>">
	<meta property="og:title" content="<?php echo get_the_title(); ?>">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<script>
		document.cookie = 'resolution=' + Math.max(screen.width, screen.height) + '; path=/';
	</script>
	<link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/sass/style.min.css?v=1.49">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
	<script src="https://use.fontawesome.com/2c188634d9.js" async defer></script>
	<?php wp_head(); ?>
	<script id="mcjs">
		! function(c, h, i, m, p) {
			m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m, p)
		}(document, "script", "https://chimpstatic.com/mcjs-connected/js/users/593e376b651adaf85ba8c7f2b/acc94612c2130896b0f112c08.js");
	</script>
</head>

<body <?php if (is_front_page()) {
			body_class('frontPage');
		}
		if (wp_is_mobile()) {
			body_class('mobile');
		} else {
			body_class();
		} ?>>
	<?php
	if (!is_front_page()) {
		get_sidebar();
	}
	?>

	<div class="wrapper">