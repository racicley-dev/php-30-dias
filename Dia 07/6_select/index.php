<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);
//CREATE
$q = "SELECT * FROM pessoas";
$result = $conn->query($q);

$pessoa = $result->fetch_assoc();

print_r($pessoa);

$pessoas = $result->fetch_all();

print_r($pessoas);

$conn->close();