# deploy server image to docker hub with v1.0
docker build -t server:1.0 .
docker tag server:1.0 glatrofa/dev-ops-demo:server-1.0
docker push glatrofa/dev-ops-demo:server-1.0