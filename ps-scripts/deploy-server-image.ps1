docker build -t server:1.0 ../server/
docker tag server:1.0 glatrofa/dev-ops-demo:server-1.0
docker push glatrofa/dev-ops-demo:server-1.0