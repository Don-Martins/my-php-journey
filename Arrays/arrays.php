<?php
//An array stores multiple values in one single variable:

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

/*In PHP, the array() function is used to create an array:

array();
In PHP, there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays
Get The Length of an Array - The count() Function
The count() function is used to return the length (the number of elements) of an array:*/
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

?>