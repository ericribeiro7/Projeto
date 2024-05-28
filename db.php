<?php
$servername = "localhost";
$username = "root"; // Usuário padrão do phpMyAdmin
$password = ""; // Senha do usuário do phpMyAdmin
$dbname = "users_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
