#!/bin/bash

cp  /var/www/html/conf/nginx/default.conf /etc/nginx/sites-enabled/default.conf

nginx -s reload