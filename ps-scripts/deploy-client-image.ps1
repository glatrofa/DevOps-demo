docker build -t client:1.0 ../client/
docker tag client:1.0 glatrofa/dev-ops-demo:client-1.0
docker push glatrofa/dev-ops-demo:client-1.0