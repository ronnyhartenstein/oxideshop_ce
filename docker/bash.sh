#!/bin/bash

$(boot2docker shellinit &>/dev/null)

echo "start bash in running container .."
docker exec -it vhost-oxidshopce bash
