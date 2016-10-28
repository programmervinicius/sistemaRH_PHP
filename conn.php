<?php
$servername = "localhost";
$username = "postgres";
$password = "";

try {
    $conn = new PDO("pgsql:host=$servername;dbname=bancoRH", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Sucesso na conexão";
    } catch(PDOException $e) {
    echo "ERRO: " . $e->getMessage();
    }
?>
