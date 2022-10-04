<?php

$cv_main_mb = $cv_main = new WPAlchemy_MetaBox(array
(
	'id' => '_cv_main',
	'title' => 'PDF download',
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => TRUE,
	'template' => get_stylesheet_directory() . '/metaboxes/cv-main-meta.php',
	'include_template' => 'archive-cv.php',
	'mode' => WPALCHEMY_MODE_EXTRACT,
	'prefix' => '_cv_main_',
));

/* eof */