docker build -t server:1.1 ../server/
docker tag server:1.1 glatrofa/dev-ops-demo:server-1.1
docker push glatrofa/dev-ops-demo:server-1.1