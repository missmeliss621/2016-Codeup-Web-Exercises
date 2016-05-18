<?php

require 'db_credentials.php';
require 'db_connect.php';

$listOfUsers = [
    ['email' => 'jason@codeup.com',   'name' => 'Jason Straughan'],
    ['email' => 'chris@codeup.com',   'name' => 'Chris Turner'],
    ['email' => 'michael@codeup.com', 'name' => 'Michael Girdley']
];

foreach ($listOfUsers as $user) {
    $query = 'INSERT INTO users (name, email) VALUES (" ' . $user['name'] . ' ", "' . $user['email'] . ' ")';
    //$dbc ->exec($query);
    //Returns the ID of the last inserted row,
    //var_dump($dbc->lastInsertID());
    var_dump($query);   
}
