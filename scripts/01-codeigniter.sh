#!/bin/bash


if [ ! -f "/var/www/html/src/index.php" ]; then

    cp -r /var/www/html/src/vendor/codeigniter/framework/application /var/www/html/src/
    cp -r /var/www/html/src/vendor/codeigniter/framework/index.php /var/www/html/src/
    cp -ra /var/www/html/conf/codeigniter/. /var/www/html/src/application/

    sed -i "s/$system_path = 'system'/$system_path = '.\/vendor\/codeigniter\/framework\/system'/g" /var/www/html/src/index.php
    sed -i "s/$config\['composer_autoload'\] = FALSE;/$config\['composer_autoload'\] = FCPATH.'vendor\/autoload.php';/g" /var/www/html/src/application/config/config.php
    sed -i "s/$autoload\['helper'\] = array();/$autoload\['helper'\] = array('url','array');/g" /var/www/html/src/application/config/autoload.php
    # sed -i "s/$autoload\['libraries'\] = array();/$autoload\['libraries'\] = array('database','session');/g" /var/www/html/src/application/config/autoload.php
    sed -i "s/$config\['sess_save_path'\] = NULL;/$config\['sess_save_path'\] = '\/tmp';/g" /var/www/html/src/application/config/config.php


    

fi



