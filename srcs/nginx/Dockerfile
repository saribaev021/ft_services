FROM alpine:latest
USER root
RUN apk upgrade update
#RUN apk update
RUN apk add nginx openssh openrc openssl supervisor
RUN mkdir -p /run/openrc && \
    touch /run/openrc/softlevel && \
    rc-update add sshd
RUN adduser -D "ndreadno"; echo "ndreadno:12ssh" | chpasswd ;
RUN mkdir -p /run/nginx; mkdir /var/www/ndreadno; mkdir -p /etc/nginx/ssl; mv ./etc/nginx/nginx.conf ./etc/nginx/nginx.conf.orig
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/ndreadno.key -out /etc/nginx/ssl/ndreadno.crt -subj "/C=RF/ST=Moscow/L=Moscow/O=school21/OU=ndreadno/CN=my_domain"
COPY ./srcs/nginx.conf ./etc/nginx/
RUN chown -R ndreadno:ndreadno /var/lib/nginx
RUN chown -R ndreadno:ndreadno /var/www/ndreadno
COPY ./srcs/index.html /var/www/ndreadno
COPY  ./srcs/supervisord.conf /etc/supervisord.conf
COPY ./srcs/start.sh .
EXPOSE 22 80 443
ENTRYPOINT [ "sh", "start.sh" ]