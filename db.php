<?php
$host = "localhost";
$user = "root";   // usuário criado no cPanel
$pass = "root";  // senha do usuário
$dbname = "ogalpa81_bitsdefe_site"; // banco de dados criado

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>

