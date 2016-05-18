<?php

require_once 'db_connect.php';

$stmt = $dbc->query('SELECT * FROM users');

echo "Columns: " . $stmt->columnCount() . PHP_EOL;

while ($row = $stmt->fetch()) {
    print_r($row);
}


function getUsers()
{
    // Bring the $dbc variable into scope somehow
    // this turns a bunch of code into a variable so you dont have to keep coding the long ass line.
    $stmt = $dbc->query('SELECT * FROM users');

    $rows = array();
    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
        $rows[] = $row;
    }

    return $rows;
}