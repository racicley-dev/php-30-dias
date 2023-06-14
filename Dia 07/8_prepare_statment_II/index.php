<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

$nome = 'Pedro';

$stmt = $conn->prepare("SELECT * FROM pessoas WHERE nome = ?");
$stmt->bind_param('s',$nome);
$stmt->execute();

$result = $stmt->get_result();
$data = $result->fetch_all();

print_r($data);