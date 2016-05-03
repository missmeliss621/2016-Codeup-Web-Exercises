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
<style>
    td {
        padding-right: 15px;
    }
    tr:nth-child(2n+1) {
        background-color: grey;
    }
</style>
    <title>My Favorite Things</title>
</head>
<body>

<p><?= $count ?></p>

<a href="?count=<?= $count+1 ?>">up</a> 
<a href="?count=<?= $count-1 ?>">down</a>


</body>
</html>