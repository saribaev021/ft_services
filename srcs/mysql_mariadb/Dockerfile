FROM alpine:latest

RUN apk update && apk upgrade && apk add mysql mysql-client openrc
VOLUME [ "/var/lib/mysql" ]

COPY ./srcs/init_db.sh .
COPY ./srcs/init_db.sql .
COPY ./srcs/wordpress.sql .
COPY ./srcs/my.cnf /etc/

RUN chmod u+x init_db.sh

EXPOSE 3306
ENTRYPOINT [ "./init_db.sh" ]