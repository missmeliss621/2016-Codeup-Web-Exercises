<?php

require_once '../db_credentials.php';
require_once '../db_connect.php';
    $data = [];
    // set the number of items to display per page
    $items_per_page = 4;

        // determine page number from $_GET
    // $page=1 - sets the page that the user initially goes to.
    $page = 1;
    if(!empty($_GET['page'])) {
        $page = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT);
        if(false === $page) {
            $page = 1;
        }
    }
    //this offset is based on the number of records we are accessing - the file with all the parks names in it. how many parks are in that file divided by 4 - we got 4 from line 7.
    $offset = ($page - 1) * $items_per_page;
    // build query
    $stmt = $dbc->query("SELECT * FROM national_parks LIMIT " . $items_per_page . " OFFSET " . 
        $offset);
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<style>
    /* or put this in your style sheet */

    .button {
        display: inline-block;
        padding: 3px 5px;
        border: none;
        background: #eee;
    }
    body {
        background-image: url(../img/iStock_000086675997_Large.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }

    #main_container {
        background-color: 
    }

</style>
<body>
<div id="main_container">
    <?php foreach($data as $park){ ?>
        <table>
            <tr>
                <td><?php echo $park['name'];?></td>
                <td><?php echo $park['location'];?></td>
                <td><?php echo $park['date_established'];?></td>
                <td><?php echo $park['area_in_acres'];?></td>
            </tr>
        </table>
    <?php } ?> 
    <a href="national_parks.php?page=<?= $page+1 ?>" class="button">Get the next 4 Parks!</a>
    <a href="national_parks.php?page=<?= $page-1 ?>" class="button">Get the last 4 Parks!</a>
</div>
</body>
</html>