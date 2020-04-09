<?php

$dbUserName = getenv('DB_USER_NAME');
if(!isset($dbUserName))
    $dbUserName = "root";
$dbPassword = getenv('DB_PASSWORD');
if(!isset($dbPassword))
    $dbPassword = "code-architects";
$dbServer = getenv('SERVER_ADDRESS');
if(!isset($dbServer))
    $dbServer = "10.105.26.205";
$dbName = getenv('DB_NAME');
if(!isset($dbName))
    $dbName = "user";
$port = getenv('PORT_NUMBER');
if(!isset($port))
    $port = "3306";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName, $port);
if($connection->connect_errno){
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

?>