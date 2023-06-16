<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

$nome = "Fulano";
$sobrenome = "da Silva";

$stmt = $conn->prepare("INSERT INTO teste(nome, sobrenome) VALUES(:nome,:sobrenome)");

$stmt->bindParam(":nome",$nome);
$stmt->bindParam(":sobrenome",$sobrenome);

$stmt->execute();