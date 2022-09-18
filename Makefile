base-build:
	DOCKER_BUILDKIT=1 docker build -t gaonis/iviaje:base --target base .

base-push:
	docker push gaonis/iviaje:base

app-build:
	DOCKER_BUILDKIT=1 docker build -t iviaje:test . --target=app --build-arg IMAGE_BASE=gaonis/iviaje:base

run-app:
	docker run --name iviaje --rm -d -p 8080:80 -it iviaje:test

exec:
	docker exec -it iviaje sh

stop:
	docker stop iviaje
	docker rm iviaje