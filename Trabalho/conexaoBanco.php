<?php
// Conexão com o banco de dados
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "loja";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>