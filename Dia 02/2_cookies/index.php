<?php
    setcookie("name","Racicley",time() + 3600); 

    if(isset($_COOKIE['name'])){
        $name = $_COOKIE['name'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World!
    </h1>
    <p><?php 
        if($name != ""){
            echo "bem-vindo(a) ".$nome;
        }
    ?></p>
    
</body>
</html>