<?php

$method = $_SERVER['REQUEST_METHOD'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> REQUEST METHOD </title>
</head>
<body>
    <?php 
        if($method == 'GET'):
            ?>
            <form action="./index.php" method="post">
                <input type="text" name="name">
                <input type="submit" value="Send">
            </form>
            <?php
        else:
            echo $_POST['name'];
        endif;
    ?>

</body>
</html>