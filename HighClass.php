<?php

class HighClass {
    $min = 1;
    $max = 100;
    $randomNum = rand($min, $max );
    public static function guess($guess, $randomNum) 
    {
        do {
            // $guess = fgets(STDIN);
            //STDIN standard input from command line.
            if ($guess < $randomNum) {
                $message="HIGHER\n";
            } elseif ($guess > $randomNum){
                $message="LOWER\n";
            } else if ($guess == $randomNum){
                $message="Good Guess";
            }
        } while ($guess != $randomNum);

        return ['message'=> $message];
    }
}
