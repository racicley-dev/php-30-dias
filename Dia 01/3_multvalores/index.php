<?php 
    if(isset($_POST['ingredients'])){
        print_r( $_POST['ingredients']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mult form values</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <input type="checkbox" name="ingredients[]" value="tomato"> Tomato
        <input type="checkbox" name="ingredients[]" value="beans"> Beans
        <input type="checkbox" name="ingredients[]" value="pumpkins"> Pumpkins
        <input type="checkbox" name="ingredients[]" value="rice"> Rice
        <input type="checkbox" name="ingredients[]" value="corn"> Corn
        <input type="submit" value="Send">
    </form>

</body>
</html>