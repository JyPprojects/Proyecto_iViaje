build:
	docker build -t gaonis/iviaje:base .

build-no-cache:
	docker build --no-cache -t gaonis/iviaje:base .

push:
	docker push gaonis/iviaje:base

run:
	docker run --name iviaje --rm -p 8080:80 -it gaonis/iviaje:base bash