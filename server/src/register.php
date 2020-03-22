<?php

include 'db-info.php';

echo "<html>";
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
    echo "<head><meta http-equiv='refresh' content='2; URL=http://localhost:30002/index.html' /></head><body>";
    echo "<strong>Registrazione eseguita!</strong> <br> Verrai reindirizzato a breve...";
}
else{
    echo "<head><meta http-equiv='refresh' content='2; URL=http://localhost:30002/html/register.html' /></head><body>";
    echo "<strong>Utente già registrato!</strong> <br> Verrai reindirizzato a breve...";
}
echo "</body></html>";

?>