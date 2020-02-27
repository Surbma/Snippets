<?php

// Nem lehet beilleszteni ezt az oldalt más oldalba például iframe-mel.
header('X-Frame-Options: SAMEORIGIN');

// Ez egy plusz védelem a sütikhez, hogy onnan se lehessen kilopni a session-t,
// amivel egy bejelentkezett felhasználó esetén valaki el tudja hitetni a WordPress-szel,
// hogy be van jelentkezve. FONTOS: Ezt csak https-sel lehet megoldani!
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
