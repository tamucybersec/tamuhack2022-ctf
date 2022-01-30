run:
	docker build -t login .
	docker run -d --read-only --restart=always --name login -p 7074:7074 login
stop:
	docker container rm -f login
build:
	gcc login.c -o login -m32 -fno-stack-protector -no-pie
dist:
	zip login.zip login.c login
