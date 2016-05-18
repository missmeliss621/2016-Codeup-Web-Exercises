<?php

require_once '../db_credentials.php';
require_once '../db_connect.php';
    //data array - first step - its just declaring an array - this is so the while loop can push information to it, to store it.
    $data = [];
    //statement & array - second step - this sets up your query. This contains all the data from National Parks.

    //On each page load, it should retrieve all records from the database and display them.
    $stmt = $dbc->query('SELECT * FROM national_parks');
    // $row is picking up
    //the fetch is crawling through the data every loop. It cleans up the info into many arrays. Each time fetch goes through the loop it takes 1 array and assigns it to a row. It does this many times over. 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // this means $row pushes the info into $data one at a time.
        $data[] = $row;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <?php foreach($data as $park){ ?>
            <h1><?php echo $park['name'];?></h1>
        <?php } ?> 

</body>
</html>