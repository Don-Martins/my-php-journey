<?php
/*
 $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).

PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.
*/

$x=12;
$t=36;
 function calculate(){
    $GLOBALS['w']=$GLOBALS['x'] + $GLOBALS['t'];
 }
 calculate();
 echo $w;
?>
