#!/bin/sh
mv /home/y68ezyeze8ea/public_html/index.php /home/y68ezyeze8ea/index.php.saved
rm -rf /home/y68ezyeze8ea/public_html/*
# update /home/y68ezyeze8ea/public_html/ with the new files
cp -a /home/y68ezyeze8ea/rayogas/public/* /home/y68ezyeze8ea/public_html
cp /home/y68ezyeze8ea/rayogas/public/.* /home/y68ezyeze8ea/public_html
rm -rf /home/y68ezyeze8ea/public_html/index.php
mv /home/y68ezyeze8ea/index.php.saved /home/y68ezyeze8ea/public_html/index.php
