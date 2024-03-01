<?php
/*
 he PHP do...while Loop
The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.
*/

$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);


$w = 0;

do {
    echo "Numbers are listeds as: $w <br>";
    $w+=2;
} while ($w <= 6);
?>