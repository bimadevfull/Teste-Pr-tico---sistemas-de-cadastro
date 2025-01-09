<?php
$servername = "localhost:3306";
$username = "root";
$password = ""; 
$dbname = "cadastro_usuarios";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("set names utf8mb4");
} catch(PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
}
?>

