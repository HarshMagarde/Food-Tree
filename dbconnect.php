<?php
$server = "localhost:3308";
$username = "root";
$password = "";
$database = "organisation";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>
