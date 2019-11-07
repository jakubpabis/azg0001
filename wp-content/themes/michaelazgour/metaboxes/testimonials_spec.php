<?php

$testimonials_mb = $testimonials = new WPAlchemy_MetaBox(array
(
	'id' => '_testimonials',
	'title' => 'Testimonials',
	'context' => 'normal',
	'types' => array('testimonials',),
	'priority' => 'high',
	'autosave' => TRUE,
	'template' => TEMPLATEPATH . '/metaboxes/testimonials_meta.php',
	'mode' => WPALCHEMY_MODE_EXTRACT,
	'prefix' => '_my_',
));

/* eof */