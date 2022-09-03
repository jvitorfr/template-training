<?php
//$conn = mysqli_connect("db","root", "root",'template_training') or die(mysqli_error());

$user = "root";
$pass = "root";
$host = "mysql-container";
$dbdb = "template_training";

$conn = new mysqli($host, $user, $pass, $dbdb);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo '<h2> CONEXÃO REALIZADA COM SUCESSO </h2>';
  $conn->close();

