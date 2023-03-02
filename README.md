# Snippets

## Changelog

**7.0**

MU plugins

surbma-disable-rss-feed.php
- A WP feed kikapcsolása.

surbma-dgv-plugin-modifications.php
- A tesóm Vimeo-s bővítményéhez egy módosítás, hogy a lista oldalon ne a shortcode-ot írja ki, hanem a linket.

surbma-define-disallow-file-mods.php
- Ez egy kiegészítés a pwp-config kódokhoz, hogy a premiumwp felhasználónál engedélyezze a bővítmények telepítését, frissítését.

**6.0**

MU plugins

surbma-security-headers.php
- Kapott plugin header-t, így a WP admin felületen is szépen jelenik meg a MU bővítmény listában.
- A WP függvények helyettesítése a normál header függvénnyel.
- Minden header-höz link és rövid leírás hozzáadása.
- A Feature-Policy helyett a Permissions-Policy használata.
- A Content-Security-Policy direktíva a végére került, mert az idővel talán helyettesítheti az összes többi header-t.

surbma-hide-plugins.php
- Átalakítás anoním függvényre.

surbma-hide-gpl-times.php
- Új MU bővítmény hozzáadása, amivel a GPL bővítményt tudom elrejteni minden felhasználó elől, kivéve a premiumwp nevű felhasználót.

surbma-enable-mime-types.php
- Átalakítás anoním függvényre.

surbma-custom-translations.php
- Átalakítás anoním függvényre.

surbma-beacon.php
- Új Beacon azonosítók megadása.

.htaccess

- Külön mappát kapott.
- A 6g-firewall.txt át lett nevezve firewall.txt-re, mert mindig frissítve lesz benne a Perishable Press által kidolgozott firewall.
- A firewall.txt fájlban felül is lett írva a legújabb 7G firewall-lal.

SSH

woocommerce.sh
- Új utasítás hozzáadása, amivel a teljes Multisite hálózatban lefrissíthető az összes aloldal.

file-management.sh
- Új utasítások hozzáadása, amivel a fájlokat és mappákat lehet kezelni a szerveren.

domain-info.sh
- Az infó lekérés módosítása, hogy a protokoll is szerepeljen a lekérésben.

**5.0**

CSS

- Divi reszponzív stílusmeghatározások átkerült egy külön fájlba.

Egyéb

- Speciális karakterek.

SSH

- Pressjitsu fájl törlése, mert már nincs ott installáció.

WP-CLI

- Adatbázis import hozzáadása.

WordPress

- custom-functions.php template hozzáadása.
- custom-post-type.php template hozzáadása.
- Alap functions.php hozzáadása.
- Alap Genesis függvények hozzáadása: genesis.php

MU plugins

- surbma-remove-ms-delete-site-submenu.php átnevezve: pwp-remove-ms-delete-site-submenu.php
- surbma-beacon.php javításaok, kód optimalizálása.
- surbma-fix-subsite-ssl.php kód módosítása.
- shortcodes.php kódok egyszerűsítése.
- wp-config.php kiegészítése néhány további meghatározással.
- ÚJ - surbma-billingo-pro.php
- ÚJ - surbma-disable-widgets-block-editor.php
- ÚJ - surbma-new-site-force-ssl.php
- ÚJ - surbma-new-site-noindex.php
- ÚJ - wp-views.php

**4.0**

SSH

- Leírás pontosítása.

WordPress

- Néhány fájl átnevezése.
- Coming Soon Pro kód üres oldalhoz.
- Widgetek létrehozásához példa kódok hozzáadása.
- Security Headers kiegészítése leírásokkal és új header-rel.

Egyéb

- Új kódok Regex átirányításhoz.

**3.0**

SSH

- Import database on the server.

CLI

- Spam comment listing and deletion.
- CLI commands for Genesis.
- New multisite commands to update WooCommerce and Genesis for all sites.
- WooCommerce update.

MU plugins

- Help Scout Beacon is updated to the latest version.
- Security headers.
- Szamlazz.hu pro version hack.

WordPress

- Admin dashboard menu items.
- Admin tab menu html structure.

**2.0**

- Added a lot of new snippets from Evernote and Gist.

**1.1**

- Minor fixes in README.

**1.0**

- Added all current files to the repo.
