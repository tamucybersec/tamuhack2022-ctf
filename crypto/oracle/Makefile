run:
	docker build -t oracle .
	docker run -d --read-only --restart=always --name oracle -p 7073:7073 oracle
stop:
	docker container rm -f oracle

