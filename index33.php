<?php

// Write a PHP program to find the second smallest number in a given array of integers.

$num = array(8, 66, 58, 59, 52, 4, 88, 1, 44, 3);
$min = $sMin = $num;
for ($i = 0; $i < sizeof($num); $i++) {
    if ($num[$i] <= $min) {
        $sMin = $min;
        $min = $num[$i];
    } else if ($num[$i] <= $sMin && $num[$i] != $min) {
        $sMin = $num[$i];
    }
}
echo "Smallest value in the provided Array is " . $sMin;

?>
