<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

$nome = "Racicley";
$sobrenome = "Pedro";

$stmt = $conn->prepare("INSERT INTO teste (nome,sobrenome) VALUES (?,?)");
$stmt->bind_param('ss',$nome,$sobrenome); // s = string - i = integer - d = double
$stmt->execute();