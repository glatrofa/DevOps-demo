docker build -t client:1.1 ../client/
docker tag client:1.1 glatrofa/dev-ops-demo:client-1.1
docker push glatrofa/dev-ops-demo:client-1.1