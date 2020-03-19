# apply all yaml file for the dev namespace
kubectl apply -f ./yaml/dev/deployments/client-deployment.yml
kubectl apply -f ./yaml/dev/deployments/jenkins-deployment.yml
kubectl apply -f ./yaml/dev/deployments/mysql-deployment.yml
kubectl apply -f ./yaml/dev/deployments/phpmyadmin-deployment.yml
kubectl apply -f ./yaml/dev/deployments/server-deployment.yml