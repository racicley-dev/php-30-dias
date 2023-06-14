<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);
//CREATE
$q = "INSERT INTO teste(nome, sobrenome) VALUES ('Racicley','Costa')";
$conn->query($q);
$conn->close();