run:
	docker build -t tamuhack-mr-robot-image .
	docker run -d --restart=always --name tamuhack-mr-robot -p 80:80 tamuhack-mr-robot-image
stop:
	docker container rm -f tamuhack-mr-robot
