<?php
$servername = "mysql.jrcf.dev";
$username = "usrapp";
$password = "010203";
$dbname = "escola";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
