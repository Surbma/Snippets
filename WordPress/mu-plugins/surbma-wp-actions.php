<?php

add_action( 'shutdown', function() {
	foreach( $GLOBALS['wp_actions'] as $action => $count )
		printf( '%s (%d) <br/>' . PHP_EOL, $action, $count );
} );
