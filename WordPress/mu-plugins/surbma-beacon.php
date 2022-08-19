<?php

add_action( 'admin_footer', function() {
	$current_user = wp_get_current_user();
	$username = $current_user->user_login;
	$email = $current_user->user_email;
	$firstname = $current_user->user_firstname;
	$lastname = $current_user->user_lastname;
	$displayname = $current_user->display_name;
	$userid = $current_user->ID;

	// Show Beacon only for selected users
	// if( current_user_can( 'unfiltered_html' ) || $userid == 3 || $userid == 4 || $userid == 6 ) {
?>
<script type="text/javascript">!function(e,t,n){function a(){var e=t.getElementsByTagName("script")[0],n=t.createElement("script");n.type="text/javascript",n.async=!0,n.src="https://beacon-v2.helpscout.net",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],"complete"===t.readyState)return a();e.attachEvent?e.attachEvent("onload",a):e.addEventListener("load",a,!1)}(window,document,window.Beacon||function(){});</script>
<script type="text/javascript">
window.Beacon('init', 'a40aed16-a598-4d0a-a74c-62b2cd47d7f9') // Prémium WordPress
window.Beacon('identify', {
	email: '<?php echo esc_js( $email ); ?>',
	Username: '<?php echo esc_js( $username ); ?>',
	UserID: '<?php echo esc_js( $userid ); ?>',
	signature: '<?php echo esc_js( hash_hmac( 'sha256', $email, '80XxHguTAR8IGtl36ZLDZXlLJuPMV6a5Ac8wnFlpo+M=' ) ); ?>'
})
</script>
<?php
	// }
} );
