<?php
$message = '';
session_start();
require 'Auth.php';

if (Auth::authCheck()){
    header('location: authorized.php');
    //make sure to exit on a redirect
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['pass'];
    if (Auth::attempt($username, $password)) {
        header('Location: authorized.php');
        die;
    } else {
        $message = "Your username and password are not correct";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Log In Page</title>
</head>
<body>
    <p><?= strip_tags($message)?></p>
    <form method="POST" action="login.php">
        <label>User Name</label>
        <input type="text" name="username"><br/>

        <label>Password</label>
        <input type="text" name="pass"><br/>

        <input type="submit">
    </form>

</body>
</html>

