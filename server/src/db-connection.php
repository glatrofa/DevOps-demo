<?php

$dbPassword = "code-architects";
$dbUserName = "root";
$dbServer = "10.96.245.98";
$dbName = "user";
$port = 3306;

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName, $port);
if($connection->connect_errno){
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

?>