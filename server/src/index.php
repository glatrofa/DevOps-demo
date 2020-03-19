<?php
/*
// Show all information, defaults to INFO_ALL
phpinfo();
// Show just the module information.
// phpinfo(8) yields identical results.
phpinfo(INFO_MODULES);
*/
echo "<h1>Test mysql db on k8s</h1>";
$mysqli = new mysqli("10.107.82.215", "root", "code-architects", "test", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$res = $mysqli->query("SELECT * FROM test");
while ($row = $res->fetch_assoc()) {
    echo "<br> Numero: " . $row['numero'] . "\n Nome: " . $row['nome'] . "\n";
}
?>