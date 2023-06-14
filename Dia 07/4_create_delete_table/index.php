<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);
//CREATE
$q = "CREATE TABLE teste(nome VARCHAR(100), sobrenome VARCHAR(100))";
$conn->query($q);
$conn->close();

//DELETE
//$q = "DROP TABLE teste";