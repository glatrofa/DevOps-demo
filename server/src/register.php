<?php

header('Access-Control-Allow-Origin: *');
include 'db-connection.php';

$username = mysqli_real_escape_string($connection, $_POST["username"]);
$password = mysqli_real_escape_string($connection, $_POST["password"]);
$password_criptata = md5($password);
$email = mysqli_real_escape_string($connection, $_POST["email"]);

$query = "SELECT email FROM user WHERE email = '".$email."'";
$result = mysqli_query($connection, $query) or die("Access failed");
$nrighe_email = mysqli_num_rows($result);
$query = "SELECT username FROM user WHERE username = '".$username."'";
$result = mysqli_query($connection, $query) or die("Access failed");
$nrighe_username = mysqli_num_rows($result);
$response = array();
if($nrighe_email != 0){
    $response[0] = 1;
}
else if($nrighe_username != 0){
    $response[0] = 2;
}
else if($nrighe_email == 0 && $nrighe_username == 0){
    $queryL = "LOCK TABLES user WRITE";
    mysqli_query($connection, $queryL) or die(mysqli_error($connection));
    $query = "INSERT INTO user (username, email, password)"
        ."VALUES ('$username', '$email', '$password_criptata')";
    mysqli_query($connection, $query) or die(mysqli_error($connection));
    $queryU = "UNLOCK TABLES";
    mysqli_query($connection, $queryU) or die (mysqli_error($connection));    
    $response[0] = 0;
}
else
    $response[0] = "ERROR";
$json_data = json_encode($response);
echo $json_data; 

?>