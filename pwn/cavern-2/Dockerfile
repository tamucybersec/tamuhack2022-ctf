FROM debian:buster-slim

RUN apt-get update -y; apt-get install socat -y

COPY cavern_2 /pwn/cavern_2
COPY flag.txt /pwn/flag.txt
WORKDIR /pwn
EXPOSE 7072

RUN echo "exec socat -s TCP-LISTEN:7072,reuseaddr,fork EXEC:/pwn/cavern_2,stderr" > /pwn/docker_entrypoint.sh

ENTRYPOINT ["sh", "/pwn/docker_entrypoint.sh"]
