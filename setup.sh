#!/bin/bash
minikube start --driver=virtualbox --memory='2000' --disk-size 5000MB;
#  kubectl delete all --all
#  kubectl delete pvc --all
#  kubectl delete pv --all
eval $(minikube docker-env)
minikube addons enable metallb;
minikube addons enable dashboard;
docker build -t nginx ./nginx;
docker build -t phpmyadmin:nd ./phpmyadmin;
docker build -t mysql:nd ./mysql_mariadb;
docker build -t wordpress ./wordpress;
docker build -t influxdb:nd ./influxdb;
docker build -t grafana:nd ./grafana;
docker build -t telegraf:nd ./telegraf;
docker build -t ftps:nd ./ftps;

kubectl apply -f metallb.yaml
kubectl apply -f pv.yaml

kubectl apply -f nginx.yaml
kubectl apply -f nginx-service.yaml
kubectl apply -f mysql-db.yaml
kubectl apply -f phpmyadmin.yaml
kubectl apply -f wordpress.yaml
kubectl apply -f influxdb.yaml
kubectl apply -f telegraf-deploy.yaml
kubectl apply -f grafana.yaml
kubectl apply -f ftps.yaml
minikube dashboard