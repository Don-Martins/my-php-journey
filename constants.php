<?php
/*
Constants are like variables except that once they are defined they cannot be changed or undefined.

A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.


  To create a constant we used the define()function of which we will input the different parameters

  
Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
*/
 define("Name","Don-Martinz in a");
 echo Name;

 /*
  We can also create ana array using the constants
 */
define("Cars", [
    "Benz",
    "Lamghogini",
    "Bugatti",
    "HighLander",
]);
echo Cars[1];
echo"<br>";
//Constants are automatically global and can be used across the entire script.

define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}
 
myTest();
?>