#!/bin/bash

$(boot2docker shellinit &>/dev/null)

# start Apache
docker start vhost-oxidshopce
