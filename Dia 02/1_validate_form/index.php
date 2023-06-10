<?php

$validations = [];

if(count($_POST) > 0){
    $validations = [];

    //Name validation
    if($_POST['name'] === ""){
        $validations[] = 'Please, insert the user name';
    }
    //Email validation
    if($_POST['email'] === ""){
        $validations[] = 'Please, insert the user email';
    }
    //Password validation
    if($_POST['password'] != $_POST['passconfirm']){
        echo $_POST['password'];
        echo $_POST['passconfirm'];

        $validations[] = 'Password and confirmation doesn\'t match';
    }
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
    <ul>
    <?php
        if(count($validations)):
            foreach($validations as $validation):?>
                <li><?= $validation ?></li>
            <?php endforeach;
        endif;
    ?>
    </ul>

    <form action="index.php" method="post">
        <input type="text" name="name">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="password" name="passconfirm">
        <input type="submit" value="Send">
    </form>
</body>
</html>