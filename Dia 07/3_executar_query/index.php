<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

$sql = "SELECT * FROM pessoas";

$result = $conn->query($sql);

print_r($result);

$conn->close();