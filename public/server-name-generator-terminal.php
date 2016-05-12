<?php

require_once 'NameGen.php';
extract(NameGen::pageController());
// ?= $value b/c its the only procedural code in the HTML.
echo $value . PHP_EOL;
?>
