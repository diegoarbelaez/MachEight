<?php
/* 
$numbers = array(2, 5, 7, 4, 2, 1, 6, 8, 0, 3, 9, 2, -10, -11, -1);
$given = 7;
*/

$numbers = explode(",",$argv[1]);
$given = $argv[2];

foreach ($numbers as $value) {
    foreach ($numbers as $second_value) {
        if (($value + $second_value) == $given)
            echo "Match found " . $value . " + " . $second_value . " = " . $value + $second_value . "\n\r";
    }
}


