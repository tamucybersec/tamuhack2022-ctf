run:
	docker build -t better-header .
	docker run -d --restart=always --name tamuhack-better-header -p 80:5000 better-header
stop:
	docker container rm -f tamuhack-better-header
