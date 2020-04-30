<?php
$host = "localhost";
$username = "root";
$password = "";
$schema = 'login_hw';
$conn = mysqli_connect($host, $username, $password, $schema);
//Database Connection Test
if(!$conn){
  die("Connection Failed".mysqli_connect_error());
}
?>
