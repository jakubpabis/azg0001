<?php

$the_quote_mb = $the_quote = new WPAlchemy_MetaBox(array
(
	'id' => '_the_quote',
	'title' => 'Quote years connection',
	'context' => 'normal',
	'types' => array('quotes',),
	'priority' => 'high',
	'autosave' => TRUE,
	'template' => get_stylesheet_directory() . '/metaboxes/the_quote_meta.php',
	'mode' => WPALCHEMY_MODE_EXTRACT,
	'prefix' => '_my_',
));

/* eof */