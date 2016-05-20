<?php

require_once '../db_credentials.php';
require_once '../db_connect.php';
require_once '../Input.php';
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

    function adPark($dbc) {
        $name = Input::get('name');
        $location = Input::get('location');
        $date_established = Input::get('date_established');
        $area_in_acres = Input::get('area_in_acres');
        $stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES (:name, :location, :date_established, :area_in_acres)');

        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':location', $location, PDO::PARAM_STR);
        $stmt->bindValue(':date_established', $date_established, PDO::PARAM_STR);
        $stmt->bindValue(':area_in_acres', $area_in_acres, PDO::PARAM_STR);
        $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->execute();
    }

    if(Input::has('name') && Input::has('location') && Input::has('date_established') && Input::has('area_in_acres')) {
        adPark($dbc);
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
    <h1>Add your own!</h1>
    <form method="POST">
    <p>
        <label for="name">Name of park: </label>
        <input id="name" name="name" type="text">
    </p>
    <p>
        <label for "location">Location of park: </label>
        <input id="location" name="location" type="text">
    </p>
    <p>
        <label for "date_established">Date Established </label>
        <input id="date_established" name="date_established" type="date_established">
    </p>
    <p>
        <label for "area_in_acres">Area in Acres </label>
        <input id="area_in_acres" name="area_in_acres" type="area_in_acres">
    </p>

    <button type="submit">Submit</button>
    </form>
</div> 
</body>
</html>