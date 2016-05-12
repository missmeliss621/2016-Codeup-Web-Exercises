<?php

define ('DB_HOST','mysql:host=127.0.0.1;');
define ('DB_NAME','dbname=employees');
define ('DB_USER' ,'codeup');
define ('DB_PASS', 'Parker123');
// constants dont get $.
//semicolon only use between host and name to concatenate them.

require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";