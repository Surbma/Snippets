# Set permission for all directories and sub directories in a directory
# This command will do it in the "public" folder.
find public -type d -exec chmod 755 {} \;

# Change all folders permissions in a folder
find . -type d -exec chmod 755 {} \;

# Set permission for all files in a directory and its sub directories
# This command will do it in the "public" folder.
find public -type f -exec chmod 644 {} \;

# Power OFF server
sudo poweroff

# Shut down server
sudo shutdown -r now

# Reboot server
sudo reboot

# Run database backups manually
sudo automysqlbackup

# Change password for the current user
passwd
