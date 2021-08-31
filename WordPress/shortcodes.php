<?php

add_shortcode( 'simple', function() {
	return '<div></div>';
} );

add_shortcode( 'simplecontent', function( $content = null ) {
	return '<div>'.do_shortcode( $content ).'</div>';
} );

add_shortcode( 'advanced', function( $atts ) {
	extract( shortcode_atts( array(
		'id' => '',
		'class' => '',
		'style' => ''
	), $atts ) );
	return '<div id="'.$id.'" class="'.$class.'" style="'.$style.'"></div>';
} );

add_shortcode( 'advancedcontent', function( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'id' => '',
		'class' => '',
		'style' => ''
	), $atts ) );
	return '<div id="'.$id.'" class="'.$class.'" style="'.$style.'">'.do_shortcode( $content ).'</div>';
} );

add_shortcode( 'lotofhtml', function() {
	ob_start();
?>
<html> <here> ...
<?php
	$output_string = ob_get_contents();
	ob_end_clean();
	return $output_string;
} );

add_shortcode( 'advancedlotofhtml', function( $atts ) {
	extract( shortcode_atts( array(
		'id' => '',
		'class' => '',
		'style' => ''
	), $atts ) );
	ob_start();
?>
<html> <here> ...
<?php
	$output_string = ob_get_contents();
	ob_end_clean();
	return $output_string;
} );

// It's better to call the shortcode function directly, instead of this call.
echo do_shortcode( '[shortcode option1="value1" option2="value2"]' );
