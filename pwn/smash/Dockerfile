FROM debian:buster-slim

RUN apt-get update -y; apt-get install socat -y

COPY smash /pwn/smash
COPY flag.txt /pwn/flag.txt
WORKDIR /pwn
EXPOSE 7071

RUN echo "exec socat -s TCP-LISTEN:7071,reuseaddr,fork EXEC:/pwn/smash,stderr" > /pwn/docker_entrypoint.sh

ENTRYPOINT ["sh", "/pwn/docker_entrypoint.sh"]
