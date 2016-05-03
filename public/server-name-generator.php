<?php

function pageController () {
$adjectives = ["Spotty", "Whispering", "Lazy", "Cuddly", "Relieved", "Jittery", "Confused", "Grumpy", "Shaggy", "Elated"];
$nouns = ["Unicorn", "Chair", "Cat", "Toaster", "Sandwich", "Frog", "Apple", "Princess", "Train", "Fish"];
$colors = ["AliceBlue", "Charteuse", "CadetBlue", "Crimson", "Cyan", "Darkgreen", "DeepSkyBlue", "Gold", "Indigo", "Tomato"];
$randomColor = mt_rand(0, 9);

    return ['valueColor' => $colors[$randomColor], 'value' => random($adjectives, $nouns)];
}
function random($array1, $array2) {
$length1 = count($array1) - 1;
$length2 = count($array2) - 1;
$firstRand = mt_rand(0, $length1);
$secondRand = mt_rand(0, $length2);
return "{$array1[$firstRand]} {$array2[$secondRand]}\n";
}

extract(pageController());
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
        color: orchid;
    }
</style>
</head>
<body>
<h1><?= $value; ?></h1>

</body>