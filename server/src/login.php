<?php

header('Access-Control-Allow-Origin: *'); // resolve the "Cross-Origin Read Blocking (CORB)" error
include 'db-connection.php';

$username = mysqli_real_escape_string($connection, $_POST["username"]);
$password = mysqli_real_escape_string($connection, $_POST["password"]);
$password_criptata = md5($password);

$query = "SELECT username, email FROM user WHERE username = '".$username."' AND password = '".$password_criptata."'";
$result = mysqli_query($connection, $query) or die("Access failed");
$rowsNumber = mysqli_num_rows($result);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$response = array();
if($rowsNumber != 0){
    $response[0] = array('username' => $row["username"], 'email' => $row["email"]);
    //$response[0] = $row["username"];
    //$response[1] = $row["email"];     
}
else{
    $response[0] = array('username' => null, 'email' => null);
    //$response[0] = null;
    //$response[1] = null; 
}
$json_data = json_encode($response);
echo $json_data; 

/* 
doesn't work:
$response -> username = $row["username"];
$response -> email = $row["email"]; 
*/

?>