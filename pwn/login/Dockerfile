FROM debian:buster-slim

RUN apt-get update -y; apt-get install socat gcc-multilib -y

COPY login /pwn/login
COPY flag.txt /pwn/flag.txt
WORKDIR /pwn
EXPOSE 7074

RUN echo "exec socat -s TCP-LISTEN:7074,reuseaddr,fork EXEC:/pwn/login,stderr" > /pwn/docker_entrypoint.sh

ENTRYPOINT ["sh", "/pwn/docker_entrypoint.sh"]
