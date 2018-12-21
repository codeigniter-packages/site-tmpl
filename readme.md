# site-tmpl

## How to use

more docker image info =>https://github.com/richarvey/nginx-php-fpm

```

docker-compose up

```

## Attention

you need set base_url in `application/config/config.php` otherwise it can not get correct value



## Composer

```
composer require codeigniter-packages/paginate --working-dir=/var/www/html/conf/composer

```


## Trouble shooting

#### I can't change my file at outside of docker container

reset file permission

```

sudo chown -R $USER *
sudo chgrp -R $USER *


```

