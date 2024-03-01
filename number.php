<?php
/*
Integers are numbers that don't have a decimal value

Here are some rules for integers:

.An integer must have at least one digit
.An integer must not have a decimal point
.An integer can be either positive or negative
. Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)

PHP has the following functions to check if the type of a variable is integer:

is_int()
is_integer() - alias of is_int()
is_long() - alias of is_int()
 */
 $x=67;
 echo var_dump(is_int($x));

 /*
 A float is a number with a decimal point or a number in exponential form.
  
 PHP has the following functions to check if the type of a variable is float:

is_float()
is_double() - alias of is_float()
 */
$y=48;
echo var_dump(is_float($y));

/*
A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

PHP has the following functions to check if a numeric value is finite or infinite:

is_finite()
is_infinite()



PHP NaN
NaN stands for Not a Number.

NaN is used for impossible mathematical operations.

PHP has the following functions to check if a value is not a number:

is_nan()
However, the PHP var_dump() function returns the data type and value



PHP Numerical Strings
The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.
*/
 echo var_dump(is_numeric($x));


/*

 PHP Casting Strings and Floats to Integers
Sometimes you need to cast a numerical value into another data type.

The (int), (integer), or intval() function are often used to convert a value to an integer


*/
// Cast float to int
 echo "<br>";
$a = 2346554487.768 ; 
$int_cast = (int)$a;
echo $int_cast;

echo "<br>";

// Cast string to int
$b = "Don-Martin.z";
$int_cast = (int)$b;
echo $int_cast;
?>