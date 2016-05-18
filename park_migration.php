<?php

require 'db_credentials.php';
require 'db_connect.php';

$dbc->exec(
    'DROP TABLE IF EXISTS national_parks'
);

$dbc->exec(
    'CREATE TABLE national_parks (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        name VARCHAR(50),
        location  VARCHAR(100) NOT NULL,
        date_established DATE,
        area_in_acres DOUBLE,
        PRIMARY KEY (id)
    )'
);
