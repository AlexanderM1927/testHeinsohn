<?php

// First
$array = [1, 4, 3, 0];
$array1 = [1, 2, [5, 8], 4];
$array2 = [0, [6, 2], null, 7, 1];

function sumarArreglo ($array) {
    $result = 0;
    for ($i=0; $i < count($array); $i++) { 
        if (is_array($array[$i])) {
            $result += sumarArreglo($array[$i]);
        } else {
            $result += $array[$i];
        }
    }
    return $result;
}

// Second
/*
    Algorithm's output always be empty, because there are not ways to execute while loop.
    The variable $i started with 0 value, and in "while" this needs an $i=1.
*/

// Third
/*
    For this, i'd use a replace function (str_replace in php).
    If we only need to reduce spaces into left o right or both, you can use ltrim, rtrim or trim respectively.
*/

$string = " Hello World ";
$newString = str_replace(" ", "", $string);
// OUTPUT: "HelloWorld"
?>