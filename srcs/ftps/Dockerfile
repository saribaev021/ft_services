FROM alpine:latest

RUN apk update && apk upgrade && apk add vsftpd
RUN apk add openssl
RUN echo -e "ndreadno\nndreadno\n" | adduser ndreadno --home /home/ndreadno
RUN chown ndreadno:ndreadno /home/ndreadno/
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/ssl.key -out /etc/ssl/ssl.crt -subj "/C=RF/ST=Moscow/L=Moscow/O=school21/OU=ndreadno/CN=my_domain"
COPY  ./srcs/vsftpd.conf ./etc/vsftpd/vsftpd.conf
COPY ./srcs/start.sh .
RUN chmod 777 start.sh
EXPOSE 21 20 21000-22000
CMD ["./start.sh"]