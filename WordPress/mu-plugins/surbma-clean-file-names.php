<?php

function surbma_clean_file_names ( $filename ) {
	$tmp = explode( '.', $filename );
	$reset = reset( $tmp );
	$end = end( $tmp );
	$ext = $reset == $end ? '' : '.' . $end;
	$file = $ext == '' ? $filename : substr( $filename, 0, -( strlen( $ext )+1 ) );
	$file = str_replace( ' ', '-', $file );
	$file = str_replace( '_', '-', $file );
	$file = preg_replace( '/-+/', '-', $file );
	$file = preg_replace( '/[^A-Za-z0-9\-]/', '', $file );
	$file = strtolower( $file );
	return $file . $ext;
}
add_filter( 'sanitize_file_name', 'surbma_clean_file_names', 10 );
