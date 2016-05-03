<?php

session_start();

if (isset($_POST['reset'])) {
    if ($_POST['reset'] == 'counter') {
        unset($_SESSION['view_count']);
    } elseif ($_POST['reset'] == 'session') {
        clearSession();
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Authorization Page</title>
</head>
<body>
    <h1>Thanks for visiting :)</h1>
</body>
</html>