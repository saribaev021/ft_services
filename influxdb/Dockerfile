FROM alpine

RUN apk add influxdb
RUN rm etc/influxdb.conf
COPY ./influxdb.conf /etc/
#RUN influxd -config etc/influxdb.conf
EXPOSE 8086

CMD [ "influxd", "-config", "etc/influxdb.conf"]