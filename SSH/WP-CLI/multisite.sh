# Multisite network commands

# Update WooCommerce on all subsites after a new version is installed in a Multisite network.
wp site list --field=url | gawk '{print "echo ===", $0; print "wp wc update --url=" $0;}' | bash

# Genesis commands to check or upgrade the database version.
wp site list --field=url | gawk '{print "echo ===", $0; print "wp genesis db version --url=" $0;}' | bash
wp site list --field=url | gawk '{print "echo ===", $0; print "wp genesis db upgrade --url=" $0;}' | bash
