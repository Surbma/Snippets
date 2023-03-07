<?php

// Video Uploads for Vimeo PRO modifications

add_action( 'admin_head', function() {
	global $pagenow;
	if ( ( ( $pagenow == 'upload.php' ) || ( $pagenow == 'admin.php' ) ) && ( $_GET['page'] == 'dgv-library' ) ) {
		ob_start();
		?>
<style>
	table.videos #size, table.videos #uploaded_at {width: 100px;}
	table.videos th, table.videos td {vertical-align: middle;}
	code.embed-code, .dgv-copy-embed-code {display: none !important;}
	code.embed-link {word-break: break-all;}
	.column-embed span.dashicons {cursor: pointer;}
	.column-embed span.dashicons:hover {color: #135e96;}
	.copy-alert {background: #000;color: #fff; padding: 15px;position: absolute;bottom: 15px;right: 15px;opacity: 1;transition: opacity 2s;}
</style>
		<?php
		$style = ob_get_contents();
		ob_end_clean();
		echo $style;
	}
} );

add_action( 'admin_footer', function() {
	global $pagenow;
	if ( ( ( $pagenow == 'upload.php' ) || ( $pagenow == 'admin.php' ) ) && ( $_GET['page'] == 'dgv-library' ) ) {
		ob_start();
		?>
<script type="text/javascript">
jQuery(document).ready(function($){
	const tableRows = document.querySelectorAll('#the-list tr');

	tableRows.forEach(row => {
		// Get the Vimeo URL from the link
		const vimeoLink = row.querySelector('.column-title .vimeo a');
		const vimeoUrl = vimeoLink.href;

		const embedCode = document.createElement('code');
		embedCode.classList.add('embed-link');
		embedCode.textContent = vimeoUrl;

		const embedLink = document.createElement('span');
		embedLink.classList.add('dashicons', 'dashicons-admin-links');
		// embedLink.textContent = 'Copy';

		embedLink.addEventListener('click', () => {
			// Create a temporary input element and set its value to the embed code
			const tempInput = document.createElement('input');
			tempInput.value = embedCode.textContent;
			document.body.appendChild(tempInput);

			// Select the input element and copy the text to the clipboard
			tempInput.select();
			document.execCommand('copy');

			// Remove the temporary input element
			document.body.removeChild(tempInput);

			// Show a message to the user
			const alert = document.createElement('div');
			alert.textContent = 'Vimeo link a vágólapra másolva.';
			alert.classList.add('copy-alert');
			document.body.appendChild(alert);
			setTimeout(() => {
				alert.style.opacity = 0;
				setTimeout(() => {
					alert.remove();
				}, 2000);
			}, 2000);
		});

		const embedContainer = row.querySelector('.column-embed');
		embedContainer.appendChild(embedCode);
		embedContainer.appendChild(embedLink);
	});

	$('.embed-code').hide();
	$('.dgv-copy-embed-code').hide();
});
</script>
		<?php
		$script = ob_get_contents();
		ob_end_clean();
		echo $script;
	}
} );