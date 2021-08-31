<?php

add_filter( 'admin_url', function( $url, $path, $blog_id ) {
    $blog_id = ( $blog_id ) ? $blog_id : get_current_blog_id();
    if ( preg_match( '|^http(s)?://|', $url) ) {
        $blog_details = get_blog_details( $blog_id );
        $url = $blog_details->siteurl . '/wp-admin/' . $path;
    }
    return $url;
}, 1, 3 );
