<?php

// Remove version parameters from static files for caching
function surbma_wp_control_remove_script_version( $src ) {
    $parts = explode( '?ver', $src );
    return $parts[0];
}
add_filter( 'script_loader_src', 'surbma_wp_control_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'surbma_wp_control_remove_script_version', 15, 1 );
