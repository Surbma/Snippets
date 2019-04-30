<?php

/**
 * Change text strings
 *
 * @link http://codex.wordpress.org/Plugin_API/Filter_Reference/gettext
 */
function surbma_custom_strings( $translated_text, $text, $domain ) {
	switch ( $translated_text ) {
		case 'Érdekelhet még&hellip;' :
			$translated_text = 'Érdekelheti még&hellip;';
			break;
		case 'Van kuponod?' :
			$translated_text = 'Van kuponja?';
			break;
		case 'Kattints ide a kód megadásához' :
			$translated_text = 'Kattintson ide a kód megadásához';
			break;
		case 'Kattints ide a bejelentkezéshez' :
			$translated_text = 'Kattintson ide a bejelentkezéshez';
			break;
		case 'Elfelejtetted a jelszavadat?' :
			$translated_text = 'Elfelejtette a jelszavát?';
			break;
		case 'Rendelésed' :
			$translated_text = 'Rendelése';
			break;
		case 'Elfelejtett jelszó?' :
			$translated_text = 'Elfelejtette jelszavát?';
			break;
		case 'Visszatérő vásárlók vagyunk?' :
			$translated_text = 'Visszatérő vásárló?';
			break;
		case 'Kattintsunk ide a bejelentkezéshez' :
			$translated_text = 'Kattintson ide a bejelentkezéshez';
			break;
		case 'Válassz egy opciót&hellip;' :
			$translated_text = 'Válasszon egy opciót&hellip;';
			break;
	}
	return $translated_text;
}
add_filter( 'gettext', 'surbma_custom_strings', 20, 3 );
