<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

$nome = 'Pedro';

$stmt = $conn->prepare("UPDATE teste SET nome = 'Carlos' WHERE nome = ?");
$nome = 'Alberto';
$stmt->bind_param('s',$nome);

$stmt->execute();

if($stmt->error){
    echo "Erro: ". $stmt->error;
}
