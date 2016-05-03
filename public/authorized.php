<?php

session_start();
if (!isset($_SESSION['logged_in_user'])) {
    header('Location: login.php');  
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Authorization Page</title>
</head>
<body>
    <h1> Hello User!</h1>       
    <a href="logout.php"><button>Logout</input></a>
</body>
</html>