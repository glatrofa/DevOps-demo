<?php

include 'db-connetion.php';

$username = mysqli_real_escape_string($connection, $_POST["username"]);
$password = mysqli_real_escape_string($connection, $_POST["password"]);
$password_criptata = md5($password);
$email = mysqli_real_escape_string($connection, $_POST["email"]);

$query = "SELECT email FROM user WHERE email = '".$email."'";
$result = mysqli_query($connection, $query) or die("Access failed");
$nrighe = mysqli_num_rows($result);
if($nrighe == 0){
    $queryL = "LOCK TABLES user WRITE";
    mysqli_query($connection, $queryL) or die(mysqli_error($connection));
    $query = "INSERT INTO user (username, email, password)"
        ."VALUES ('$username', '$email', '$password_criptata')";
    mysqli_query($connection, $query) or die(mysqli_error($connection));
    $queryU = "UNLOCK TABLES";
    mysqli_query($connection, $queryU) or die (mysqli_error($connection));       
}
else{
    // controllo email e/o username già presenti
}

?>