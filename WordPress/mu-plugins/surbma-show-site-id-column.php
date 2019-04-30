<?php

if ( is_multisite() ) {
    add_filter( 'wpmu_blogs_columns', 'surbma_show_site_id_column_site_id' );
    function surbma_show_site_id_column_site_id( $columns ) {
        $columns['site_id'] = __( 'ID', 'site_id' );
        return $columns;
    }

    add_action( 'manage_sites_custom_column', 'surbma_show_site_id_column_site_id_columns', 10, 3 );
    add_action( 'manage_blogs_custom_column', 'surbma_show_site_id_column_site_id_columns', 10, 3 );
    function surbma_show_site_id_column_site_id_columns( $column, $blog_id ) {
        if ( $column == 'site_id' ) {
            echo $blog_id;
        }
    }
}
