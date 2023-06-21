<?php

$host = "localhost";
$dbname = "schedule";
$user = "root";
$pass = "";

try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    //Error mode
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    //Connection error
    $error = $e->getMessage();
    echo "Error: $error";
}