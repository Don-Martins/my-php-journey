<?php
/*
 Conditional statements are used to perform different actions based on different conditions.

PHP Conditional Statements
Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

In PHP we have the following conditional statements:

if statement - executes some code if one condition is true
if...else statement - executes some code if a condition is true and another code if that condition is false
if...elseif...else statement - executes different codes for more than two conditions
switch statement - selects one of many blocks of code to be executed

*/
//For the if statement
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}

//For the if else statement
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

//For the if elseif else statement
$t = date("H");

if ($t < "10") {
    echo "Have a good day!";
}elseif ($t< "20") {
  echo "Good Afternoon";
} else {
    echo "Have a good night!";
}
?>