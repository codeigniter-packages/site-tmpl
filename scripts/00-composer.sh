#!/bin/bash

mkdir -p /var/www/html/src/application/config
composer install --prefer-dist --working-dir=/var/www/html/conf/composer
