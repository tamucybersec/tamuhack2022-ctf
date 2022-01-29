FROM debian:buster-slim

RUN apt-get update -y; apt-get install socat -y

COPY cavern /pwn/cavern
COPY flag.txt /pwn/flag.txt
WORKDIR /pwn
EXPOSE 7070

RUN echo "exec socat -s TCP-LISTEN:7070,reuseaddr,fork EXEC:/pwn/cavern,stderr" > /pwn/docker_entrypoint.sh

ENTRYPOINT ["sh", "/pwn/docker_entrypoint.sh"]
