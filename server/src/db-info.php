<?php

$dbPassword = "code-architects";
$dbUserName = "root";
$dbServer = "10.108.241.139";
$dbName = "user";
$port = 3306;

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName, $port);
if($connection->connect_errno){
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

?>