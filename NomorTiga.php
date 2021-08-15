<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbName = "db_uap2094";

$conn = mysqli_connect($servername, $username, $password, $dbName);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
