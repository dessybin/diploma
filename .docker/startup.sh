#!/bin/sh
docker stop $(docker ps -a -q)
docker-compose down
docker volume rm docker_my-volume
docker rmi -f $(docker images -q)
docker-compose up -d --force-recreate