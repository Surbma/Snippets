<?php

function surbma_simple_shortcode() {
	return '<div></div>';
}
add_shortcode( 'simple', 'surbma_simple_shortcode' );

function surbma_simple_shortcode_with_content( $content = null ) {
	return '<div>'.do_shortcode( $content ).'</div>';
}
add_shortcode( 'simplecontent', 'surbma_simple_shortcode_with_content' );

function surbma_advanced_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'id' => '',
		'class' => '',
		'style' => ''
	), $atts ) );
	return '<div id="'.$id.'" class="'.$class.'" style="'.$style.'"></div>';
}
add_shortcode( 'advanced', 'surbma_advanced_shortcode' );

function surbma_advanced_shortcode_with_content( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'id' => '',
		'class' => '',
		'style' => ''
	), $atts ) );
	return '<div id="'.$id.'" class="'.$class.'" style="'.$style.'">'.do_shortcode( $content ).'</div>';
}
add_shortcode( 'advancedcontent', 'surbma_advanced_shortcode_with_content' );

function surbma_html_shortcode() {
	ob_start();
?>
<html> <here> ...
<?php
	$output_string = ob_get_contents();
	ob_end_clean();
	return $output_string;
}
add_shortcode( 'lotofhtml', 'surbma_html_shortcode' );

// It's better to call the shortcode function directly, instead of this call.
echo do_shortcode( '[shortcode option1="value1" option2="value2"]' );
