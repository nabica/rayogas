#!/bin/sh

# Make a copy of index.php and delete everything inside public_html
mv /home/y68ezyeze8ea/public_html/index.php /home/y68ezyeze8ea/index.php.saved
#rm -rf /home/y68ezyeze8ea/public_html/*

# update /home/y68ezyeze8ea/public_html/ with the new files
cp -a /home/y68ezyeze8ea/rayogas/public/* /home/y68ezyeze8ea/public_html
cp /home/y68ezyeze8ea/rayogas/public/.* /home/y68ezyeze8ea/public_html
rm -rf /home/y68ezyeze8ea/public_html/index.php
mv /home/y68ezyeze8ea/index.php.saved /home/y68ezyeze8ea/public_html/index.php

# Remove folder uploads and then create a symbolic link
rm -rf /home/y68ezyeze8ea/public_html/uploads
ln -s /home/y68ezyeze8ea/rayogas/public/uploads /home/y68ezyeze8ea/public_html
