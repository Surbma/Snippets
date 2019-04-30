<?php
/** Remove the space used calculation. */
add_action( 'pre_get_space_used', function() {
	return 0; // No space is used, no upload limits
} );
