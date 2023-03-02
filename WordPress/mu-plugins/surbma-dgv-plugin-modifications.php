<?php

// Video Uploads for Vimeo PRO modifications

add_action( 'admin_head', function() {
	global $pagenow;
	if ( ( $pagenow == 'upload.php' ) && ( $_GET['page'] == 'dgv-library' ) ) {
		ob_start();
		?>
<style>
	code.embed-code, .dgv-copy-embed-code {display: none;}
	.embed-link-wrapper span.dashicons {cursor: pointer;}
	.embed-link-wrapper span.dashicons:hover {color: #135e96;}
</style>
		<?php
		$style = ob_get_contents();
		ob_end_clean();
		echo $style;
	}
} );

add_action( 'admin_footer', function() {
	global $pagenow;
	if ( ( $pagenow == 'upload.php' ) && ( $_GET['page'] == 'dgv-library' ) ) {
		ob_start();
		?>
<script type="text/javascript">
jQuery(document).ready(function($){
	// Get the Vimeo ID from the shortcode
	const container = document.getElementsByClassName('embed-code');
	const regex = /\[dgv_vimeo_video id="(\d+)"\]/;

	for (let i = 0; i < container.length; i++) {
		const shortcode = container[i].innerHTML;
		const matches = shortcode.match(regex);

		if (matches) {
			const vimeoId = matches[1];
			console.log(vimeoId);

			// Create a new <code> element with the Vimeo video ID
			const codeElem = document.createElement('code');
			codeElem.classList.add('embed-link');
			codeElem.innerHTML = `https://vimeo.com/<span class="embed-vimeo-id">${vimeoId}</span>`;

			// Create a new <button> element for copying the code
			const copyButton = document.createElement('span');
			// copyButton.innerText = 'Copy';
			copyButton.classList.add('dashicons', 'dashicons-admin-links');
			copyButton.addEventListener('click', () => {
				// Copy the <code> element's text content to the clipboard
				const range = document.createRange();
				range.selectNode(codeElem);
				window.getSelection().removeAllRanges();
				window.getSelection().addRange(range);
				document.execCommand('copy');
				window.getSelection().removeAllRanges();
			});

			// Create a new <div> element to hold the <code> and <button> elements
			const wrapperElem = document.createElement('div');
			wrapperElem.classList.add('embed-link-wrapper');
			wrapperElem.appendChild(codeElem);
			wrapperElem.appendChild(copyButton);

			// Insert the wrapper element after the current element in the DOM
			container[i].parentNode.insertBefore(wrapperElem, container[i].nextSibling);
		}
	}

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