# Domain DNS rekordokok lekéréséhez:
dig domain.hu
dig domain.hu MX

# Domain header lekérdezéshez.
# Ez az átirányítást is megmutatja, ha van. Jobb így ellenőrizni, mert ez kihagyja a gyorsítótárat.
curl -I https://domain.hu
