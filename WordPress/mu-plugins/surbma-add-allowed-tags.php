<?php

global $allowedposttags;
$allowedposttags['a'] = array(
	'href' => array(),
	'rel' => array(),
	'rev' => array(),
	'name' => array(),
	'target' => array(),
	'download' => array()
);
$allowedposttags['div'] = array(
	'align' => array(),
	'dir' => array(),
	'lang' => array(),
	'xml:lang' => array(),
	'data-uk-accordion' => array()
);
$allowedposttags = array_map( '_wp_add_global_attributes', $allowedposttags );

global $allowedtags;
$allowedtags['img'] = array(
    'src'    => array(),
    'height' => array(),
    'width'  => array(),
    'alt'  => array(),
    'class'  => array()
);
