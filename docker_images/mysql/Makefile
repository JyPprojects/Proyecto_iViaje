build:
	docker build -t gaonis/mysql:base .

build-no-cache:
	docker build --no-cache -t gaonis/mysql:base .

push:
	docker push gaonis/mysql:base

run:
	docker run --name mysql --rm -it gaonis/mysql:base bash