<?php
$host = "localhost";
$user = "root";
$pass = "Px2kTavo2022";
$port = "3306";
$dbname = "projetosfotos";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);
    echo "conexão feita com sucesso";
} catch (PDOException $e) {
    echo "Connection failed:" . $e->getMessage();
}
