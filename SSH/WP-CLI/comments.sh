# This is working, but for a lot of comments it will not work,
# as wp comment list will return "Killed", instead of the actual comment ids.
wp --url=$(wp site url 132) comment delete $(wp comment list --status=hold --format=ids) --force

wp --url=$(wp site url 132) comment list --status=spam
