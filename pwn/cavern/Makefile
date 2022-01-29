run:
	docker build -t cavern .
	docker run -d --read-only --restart=always --name cavern -p 7070:7070 cavern
stop:
	docker container rm -f cavern

