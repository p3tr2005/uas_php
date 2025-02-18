# create docker container
docker container create --name UAS_PHP_MYSQL -e MYSQL_ROOT_PASSWORD=root -p 3306:3306 mysql

# run docker container
docker container start UAS_PHP_MYSQL

# exec docker container
docker exec -it UAS_PHP_MYSQL bash