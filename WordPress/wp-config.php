<?php

// Nem lehet beilleszteni ezt az oldalt más oldalba például iframe-mel.
header('X-Frame-Options: SAMEORIGIN');

// Ez egy plusz védelem a sütikhez, hogy onnan se lehessen kilopni a session-t,
// amivel egy bejelentkezett felhasználó esetén valaki el tudja hitetni a WordPress-szel,
// hogy be van jelentkezve. FONTOS: Ezt csak https-sel lehet megoldani!
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);

// define('WP_DEFAULT_THEME', 'child');

// if ($_SERVER['HTTP_HOST']=='premiumwp.hu')
     // define('WP_DEBUG',true);

define('GF_LICENSE_KEY', 'e30eb85b3de8a564c25c9a533469f138');
define('SEED_CSP_API_KEY','3IwsZu2EG6zjZI5Y');
define('SOLILOQUY_LICENSE_KEY','21291ae444c905376cdfadea6a9cebc9');

define( 'PWP_CONTROL_ADMIN_FOOTER', '<a class="pwp-link" href="http://premiumwp.hu/" target="_blank">Prémium WordPress</a> | Elakadtál? Kérések és kérdések leadása itt: <a href="mailto:ugyfelszolgalat@premiumwp.hu" target="_blank">ugyfelszolgalat@premiumwp.hu</a>' );
define( 'PWP_CONTROL_FOOTER_CREDS', ' | <a class="pwp-link" href="http://premiumwp.hu/" target="_blank" rel="nofollow">Prémium WordPress</a>' );
define( 'PWP_CONTROL_GOOGLE_ANALYTICS', '' );
