run:
	docker build -t secret-number .
	docker run -d --restart=always --name tamuhack-secret-number -p 80:80 secret-number
stop:
	docker container rm -f tamuhack-secret-number
