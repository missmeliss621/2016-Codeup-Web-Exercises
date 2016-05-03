<?php
$message = '';



session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    if ($username === 'guest' && $pass === 'password') {
        $_SESSION['logged_in_user'] = $username;
        header('Location: authorized.php');
        die;
    } else {
        $message = "Your username and password are complete";
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

