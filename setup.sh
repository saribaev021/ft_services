#!/bin/bash
minikube start --driver=virtualbox --memory='2000' --disk-size 5000MB;
#  kubectl delete all --all
#  kubectl delete pvc --all
#  kubectl delete pv --all
eval $(minikube docker-env)
minikube addons enable metallb;
minikube addons enable dashboard;
docker build -t nginx ./srcs/nginx;
docker build -t phpmyadmin:nd ./srcs/phpmyadmin;
docker build -t mysql:nd ./srcs/mysql_mariadb;
docker build -t wordpress ./srcs/wordpress;
docker build -t influxdb:nd ./srcs/influxdb;
docker build -t grafana:nd ./srcs/grafana;
docker build -t telegraf:nd ./srcs/telegraf;
docker build -t ftps:nd ./srcs/ftps;

kubectl apply -f srcs/yaml/metallb.yaml
kubectl apply -f srcs/yaml/pv.yaml

kubectl apply -f srcs/yaml/nginx.yaml
kubectl apply -f srcs/yaml/nginx-service.yaml
kubectl apply -f srcs/yaml/mysql-db.yaml
kubectl apply -f srcs/yaml/phpmyadmin.yaml
kubectl apply -f srcs/yaml/wordpress.yaml
kubectl apply -f srcs/yaml/influxdb.yaml
kubectl apply -f srcs/yaml/telegraf-deploy.yaml
kubectl apply -f srcs/yaml/grafana.yaml
kubectl apply -f srcs/yaml/ftps.yaml
minikube dashboard