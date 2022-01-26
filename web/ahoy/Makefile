run:
	docker build -t ahoy .
	docker run -d --restart=always --name tamuhack-ahoy -p 80:80 ahoy
stop:
	docker container rm -f tamuhack-ahoy
