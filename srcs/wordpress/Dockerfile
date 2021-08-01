FROM alpine:latest

RUN apk update
RUN apk add php7 php7-mbstring php7-session php7-json php7-mysqli wget
RUN mkdir -p /usr/share/webapps/
RUN wget http://wordpress.org/wordpress-5.5.1.tar.gz
RUN tar -xzvf wordpress-5.5.1.tar.gz
RUN mv ./wordpress /usr/share/webapps/
RUN rm wordpress-5.5.1.tar.gz

COPY ./srcs/wp-config.php /usr/share/webapps/wordpress/wp-config.php
COPY ./srcs/start.sh ./
CMD [ "sh", "start.sh" ]
EXPOSE 5050