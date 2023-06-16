<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

$nome = "Sicrano";
$sobrenome = "da Silva";

$stmt = $conn->prepare("UPDATE teste SET nome = :nome WHERE sobrenome = :sobrenome");

$stmt->bindParam(":nome",$nome);
$stmt->bindParam(":sobrenome",$sobrenome);

$stmt->execute();