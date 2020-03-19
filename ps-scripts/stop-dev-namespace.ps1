# shutdown all yaml file for the dev namespace
kubectl delete -f ./yaml/dev/deployments/client-deployment.yml
kubectl delete -f ./yaml/dev/deployments/jenkins-deployment.yml
kubectl delete -f ./yaml/dev/deployments/mysql-deployment.yml
kubectl delete -f ./yaml/dev/deployments/phpmyadmin-deployment.yml
kubectl delete -f ./yaml/dev/deployments/server-deployment.yml