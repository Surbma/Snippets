# --path="apps/surbmacom/public/"

wp --path="apps/surbmacom/public/" cache flush
wp --path="apps/surbmacom/public/" super-admin list
wp --path="apps/surbmacom/public/" super-admin remove ID/USERNAME
wp --path="apps/surbmacom/public/" site list
wp --path="apps/surbmacom/public/" site deactivate ID
wp --path="apps/surbmacom/public/" core check-update
wp --path="apps/surbmacom/public/" core update
wp --path="apps/surbmacom/public/" plugin list --update=available
wp --path="apps/surbmacom/public/" plugin update --all
wp --path="apps/surbmacom/public/" theme list --update=available
wp --path="apps/surbmacom/public/" theme update --all
