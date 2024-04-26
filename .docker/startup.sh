#!/bin/sh

docker-compose down
docker volume rm docker_my-volume
docker rmi -f $(docker images -q)
docker-compose up -d --force-recreate