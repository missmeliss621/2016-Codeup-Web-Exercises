<?php
// $min = 1;
// $max = 100;
// $randomNum = rand($min, $max );
require_once '
extract(HighClass::guess($,y));
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
        <p><?= strip_tags($message)?></p>
    <form method="POST" action="login.php">
        <label>Min</label>
        <input type="text" name="username"><br/>

        <label>Max</label>
        <input type="text" name="pass"><br/>

        <label>guess</label>
        <input type="text" name="pass"><br/>

        <input type="submit">
    </form>
</body>
</html>