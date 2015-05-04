#!/bin/bash

# using https://registry.hub.docker.com/u/gpayer/apache-php53-oxid-i386/

$(boot2docker shellinit &>/dev/null)

# rebuild container

echo "stop container .."
docker stop vhost-oxidshopce

echo "remove container .."
docker rm vhost-oxidshopce

#echo "build image .."
#docker build -t yourusername/oxidshopce .

# TODO only if not exists
mkdir apache2logs

# TODO make /Users/vhosts/oxideshop_ce/ as param
echo "start container .."
docker run --name vhost-oxidshopce \
    -p 8008:80 \
    -v /Users/vhosts/oxideshop_ce/source:/var/www/ \
    -v /Users/vhosts/oxideshop_ce/docker/apache2logs:/var/log/apache2 \
    --link mysql:mysql \
    -e ENV_UID=`id -u` \
    -e ENV_GID=`id -g` \
    -d gpayer/apache-php53-oxid-i386:0.9.3
