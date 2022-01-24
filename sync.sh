#!/bin/sh
sudo mv /var/www/html/index.php /var/www/index.php.saved
sudo rm -rf /var/www/html/*
# update /var/www/html/ with the new files
sudo cp -a /var/mps/public/* /var/www/html
sudo cp /var/mps/public/.* /var/www/html
sudo rm -rf /var/www/html/index.php
sudo mv /var/www/index.php.saved /var/www/html/index.php
