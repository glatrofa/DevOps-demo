<?php

include 'db-info.php';

echo $connection->host_info . "\n";

/*
$res = $connection->query("SELECT username, email FROM user");
while ($row = $res->fetch_assoc()) {
    echo "<br> Username: " . $row['username'] . "\n Email: " . $row['email'] . "\n";
}
*/

?>