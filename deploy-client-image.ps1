# deploy client image to docker hub with v1.0
docker build -t client:1.0 .
docker tag client:1.0 glatrofa/dev-ops-demo:client-1.0
docker push glatrofa/dev-ops-demo:client-1.0