<?php

// Custom body class
add_filter( 'body_class', function( $classes ) {
     $classes[] = 'customclass';
     return $classes;
} );

// Replace default style sheet
add_filter( 'stylesheet_uri', function() {
     return CHILD_URL . '/custom.css';
}, 10, 2 );

// Replaces the excerpt "more" text by a link
add_filter( 'excerpt_more', function( $more ) {
  global $post;
  return ' <a class="moretag" href="'. get_permalink($post->ID) . '">[Tovább...]</a>';
} );
