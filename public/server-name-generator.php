<?php
require_once 'NameGen.php';

extract(NameGen::pageController());
?>
<!DOCTYPE html>
<html> 
<head>
<style>
    body {
        background-color: <?= $valueColor; ?>;
    }
    h1 {
        margin-top: 150px;
        text-align: center;
        font-size: 3em;
        color: Orchid;
    }
</style>
</head>
<body>
<h1><?= $value; ?></h1>

</body>