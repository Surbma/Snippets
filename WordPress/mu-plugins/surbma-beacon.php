<?php

function surbma_beacon_admin_footer_function() {
	$current_user = wp_get_current_user();
	$username = $current_user->user_login;
	$email = $current_user->user_email;
	$firstname = $current_user->user_firstname;
	$lastname = $current_user->user_lastname;
	$displayname = $current_user->display_name;
	$userid = $current_user->ID;
	$locale = get_locale();

	if ( !is_super_admin() ) {
?>
<script>!function(e,o,n){window.HSCW=o,window.HS=n,n.beacon=n.beacon||{};var t=n.beacon;t.userConfig={},t.readyQueue=[],t.config=function(e){this.userConfig=e},t.ready=function(e){this.readyQueue.push(e)},o.config={docs:{enabled:!1,baseUrl:""},contact:{enabled:!0,formId:"72827e54-6777-11e5-8846-0e599dc12a51"}};var r=e.getElementsByTagName("script")[0],c=e.createElement("script");c.type="text/javascript",c.async=!0,c.src="https://djtflbt20bdde.cloudfront.net/",r.parentNode.insertBefore(c,r)}(document,window.HSCW||{},window.HS||{});</script>

<script type="text/javascript">
HS.beacon.config({
	<?php if ( $locale == 'hu_HU' ) { ?>
	translation: {
		searchLabel: 'Keresés a tudásbázisban...',
		searchErrorLabel: 'Időtúllépési hiba a keresésben. Ellenőrizze az internet kapcsolatot és próbálja meg újra!',
		noResultsLabel: 'Nincs találat a következő kifejezésre:',
		contactLabel: 'Üzenet írása az ügyfélszolgálatra',
		attachFileLabel: 'Fájl csatolása',
		attachFileError: 'A maximális fájlméret 10 MB',
		nameLabel: 'Név',
		nameError: 'A név kitöltése kötelező',
		emailLabel: 'Email',
		emailError: 'Nem megfelelő email',
		topicLabel: 'Téma választása',
		topicError: 'A téma kiválasztása kötelező',
		subjectLabel: 'Tárgy',
		subjectError: 'A tárgy kitöltése kötelező',
		messageLabel: 'Miben segíthetünk?',
		messageError: 'Az üzenet kitöltése kötelező',
		sendLabel: 'Küldés',
		contactSuccessLabel: 'Köszönjük az üzenetet!',
		contactSuccessDescription: 'Hamarosan válaszolunk.'
	},
	<?php } ?>
	// topics: [
	//   { val: '.kérdés', label: 'Általános kérdés' },
	//   { val: '.ajánlatkérés', label: 'Hire for work' },
	//   { val: 'surbma-plugin-help', label: 'Need help with one of your plugin' },
	//   { val: 'surbma-plugin-bug', label: 'I think I found a bug in one of your plugin'}
	// ],
	<?php if ( $locale == 'hu_HU' ) { ?>
	instructions: 'Prémium WordPress ügyfélszolgálat',
	<?php } ?>
	<?php if ( $locale != 'hu_HU' ) { ?>
	instructions: 'Premium WordPress Support',
	<?php } ?>
	poweredBy: false
});

HS.beacon.ready(function() {
	HS.beacon.identify({
		<?php if ( $lastname != '' && $firstname != '' ) { ?>
		name: '<?php echo $lastname .' '. $firstname; ?>',
		<?php } ?>
		email: '<?php echo $email; ?>',
		Username: '<?php echo $username; ?>',
		UserID: '<?php echo $userid; ?>',
		Locale: '<?php echo $locale; ?>'
	});
});
</script>
<?php }
}
add_action( 'admin_footer', 'surbma_beacon_admin_footer_function' );
