run:
	docker build -t cavern_2 .
	docker run -d --read-only --restart=always --name cavern_2 -p 7072:7072 cavern_2
stop:
	docker container rm -f cavern_2

