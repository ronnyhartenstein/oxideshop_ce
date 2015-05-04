#!/bin/bash

$(boot2docker shellinit &>/dev/null)

# Apache stoppen
docker stop vhost-oxidshopce
