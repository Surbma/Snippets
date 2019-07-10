# Import database on the server.
# DB_USER, DB_PASS and DB_NAME must be changed to its current values.
mysql -u DB_USER -p DB_PASS --default-character-set=utf8 DB_NAME < /path/to/file.sql
