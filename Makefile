base-build:
	DOCKER_BUILDKIT=1 docker build -t gaonis/iviaje:base --target base .

base-push:
	docker push gaonis/iviaje:base

app-run:
	docker run --name iviaje  -v ${PWD}/code:/code --rm -d -p 8080:80 gaonis/iviaje:base

develop-build-push:
	DOCKER_BUILDKIT=1 docker build -t gaonis/iviaje:develop --target develop .
	docker push gaonis/iviaje:develop

composer-install:
	docker run -v ${PWD}/code:/code -w /code --rm -it gaonis/iviaje:develop 'composer' 'install'

exec:
	docker exec -it iviaje sh

stop:
	docker stop iviaje

docker-compose-up:
	docker compose --env-file ./code/env/env.env up -d