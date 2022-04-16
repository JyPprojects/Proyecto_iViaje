build:
	docker build -t iviaje:1.0 .

run:
	docker run --name iviaje --rm -d -p 8080:80 -it iviaje:1.0