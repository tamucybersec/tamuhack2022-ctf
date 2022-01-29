run:
	docker build -t smash .
	docker run -d --read-only --restart=always --name smash -p 7071:7071 smash
stop:
	docker container rm -f smash

