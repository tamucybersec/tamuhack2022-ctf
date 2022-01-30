FROM python:slim-buster

RUN apt-get update -y; apt-get install socat -y

COPY oracle.py /crypto/oracle.py
COPY secrets.txt /crypto/secrets.txt
RUN chmod +x /crypto/oracle.py
RUN pip install pycryptodome
WORKDIR /crypto
EXPOSE 7073

RUN echo "exec socat -s TCP-LISTEN:7073,reuseaddr,fork EXEC:\"python3 /crypto/oracle.py\",stderr" > /crypto/docker_entrypoint.sh

ENTRYPOINT ["sh", "/crypto/docker_entrypoint.sh"]
