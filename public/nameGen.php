<?php

class NameGen
{
    // public static $random;

    public static function pageController () {
    $adjectives = ["Spotty", "Whispering", "Lazy", "Cuddly", "Relieved", "Jittery", "Confused", "Grumpy", "Shaggy", "Elated"];
    $nouns = ["Unicorn", "Chair", "Cat", "Toaster", "Sandwich", "Frog", "Apple", "Princess", "Train", "Fish"];
    $colors = ["AliceBlue", "Charteuse", "CadetBlue", "Crimson", "Cyan", "Darkgreen", "DeepSkyBlue", "Gold", "Indigo", "Tomato"];
    $randomColor = mt_rand(0, 9);

    return ['valueColor' => $colors[$randomColor], 'value' => self::random($adjectives, $nouns)];
    }
    public static function random($array1, $array2) {
    $length1 = count($array1) - 1;
    $length2 = count($array2) - 1;
    $firstRand = mt_rand(0, $length1);
    $secondRand = mt_rand(0, $length2);
    //this is a variable definition so you dont need to define at the top.
    return "{$array1[$firstRand]} {$array2[$secondRand]}\n";
    }
}