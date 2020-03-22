<?php

include 'db-info.php';

echo "<html>";
$username = mysqli_real_escape_string($connection, $_POST["username"]);
$password = mysqli_real_escape_string($connection, $_POST["password"]);
$password_criptata = md5($password);

$query = "SELECT username, email FROM user WHERE username = '".$username."' AND password = '".$password_criptata."'";
$result = mysqli_query($connection, $query) or die("Access failed");
$rowsNumber = mysqli_num_rows($result);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//echo "rowsNumber=".$rowsNumber;
if($rowsNumber != 0){
    $response = array();
    $response[0] = array('username' => $row["username"], 'email' => $row["email"]);
    //$json_data = json_encode($response);
    //file_put_contents('user_info.json', $json_data);
    //echo $json_data;     
    echo utf8_decode(json_encode($response))."<br>";
    echo "<head><meta http-equiv='refresh' content='2; URL=http://localhost:30002/index.html?username=".$row["username"]."&email=".$row["email"]."' /></head><body>";
    echo "<strong>Accesso eseguito!</strong> <br> Verrai reindirizzato a breve...";
}
else{
    $response = array();
    $response[0] = array('username' => null, 'email' => null);
    //$json_data = json_encode($response);
    //echo $json_data;  
    echo utf8_decode(json_encode($response))."<br>";
    echo "<head><meta http-equiv='refresh' content='2; URL=http://localhost:30002/html/register.html' /></head><body>";
    echo "<strong>Utente non registrato!</strong> <br> Verrai reindirizzato a breve...";
}
echo "</body></html>";

?>