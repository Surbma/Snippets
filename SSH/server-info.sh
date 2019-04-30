# Get CPU info
cat /proc/cpuinfo

# Test CPU speed
sysbench --test=cpu --cpu-max-prime=20000 run

# Get RAM info
cat /proc/meminfo

# Get Disk info
df -h

# PHP info
php -i
