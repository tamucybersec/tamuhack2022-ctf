FROM debian:latest

RUN apt-get update && \
    apt-get install -y apache2 && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

COPY pages /var/www/html

EXPOSE 80

COPY main.sh /
ENTRYPOINT ["/main.sh"]