<?php

$dbPassword = getenv('DB_PASSWORD');
$dbUserName = getenv('DB_USER_NAME');
$dbServer = getenv('SERVER_ADDRESS');
$dbName = getenv('DB_NAME');
$port = 3306;

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName, $port);
if($connection->connect_errno){
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

?>