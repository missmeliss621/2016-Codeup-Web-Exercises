<?php

function pageController ()
{
    //!isset is checking to see if the counter is at 0 when first going to the page.
    $count = !isset($_GET['count']) ? 0 : $_GET['count'];

    return ['count' => $count];
} 


extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/pingpong.css">
    <title>Ping</title>
</head>
<body>
    <div id="counter">
        <p><?= $count ?></p>    
    </div>
    <div id="hitmiss">
        <a href="ping.php?count=<?= $count+1 ?>">hit</a> 
        <a href="ping.php?count=0">miss</a> 
    </div>

</body>
</html>