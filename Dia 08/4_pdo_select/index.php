<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);


$sobrenome = "da Silva";

$stmt = $conn->prepare("SELECT * FROM teste WHERE sobrenome = :sobrenome");

$stmt->bindParam(":sobrenome",$sobrenome);

$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($data);

$nomes = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<br><br>";
print_r($nomes);