# Update WooCommerce on all subsites after a new version is installed in a Multisite network.
wp site list --field=url | gawk '{print "echo ===", $0; print "wp wc update --url=" $0;}' | bash
