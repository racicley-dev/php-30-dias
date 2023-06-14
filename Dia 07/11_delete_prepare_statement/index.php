<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

$nome = 'Pedro';

$stmt = $conn->prepare("DELETE FROM teste WHERE nome = ?");

$nome = 'Alberto';

$stmt->bind_param('s',$nome);
$stmt->execute();
$stmt->close();

