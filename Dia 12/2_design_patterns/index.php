<?php
    include_once("db.php");
?>

<h1>Insert a Car</h1>
<form action="process.php" method="post">
    <div>
        <label for="brand">Car brand</label>
        <input type="text" name="brand" id="">
    </div>

    <div>
        <label for="km">Car Km</label>
        <input type="text" name="km" id="">
    </div>

    <div>
        <label for="brand">Car color</label>
        <input type="text" name="color" id="">
    </div>
    <input type="submit" value="Save">
</form>