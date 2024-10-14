.PHONY: all clean


help:
		cat Makefile


upb:
		docker compose -f ./docker-compose.yml up -d --build


up:
		docker compose -f ./docker-compose.yml up -d


db:
		docker compose exec db bash


app5:
		docker compose exec lara5-app ash


app9:
		docker compose exec lara9-app ash

down:
		docker compose down --remove-orphans