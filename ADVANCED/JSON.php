<?php
//JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.

//First, we will look at the following two functions:

// json_encode()
// json_decode()

//1 . json_encode()
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);


// 2 .json_decode()

// The json_decode() function is used to decode a JSON object into a PHP object or an associative array.

// Example
// This example decodes JSON data into a PHP object:

echo "<br>";
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj));

//Example-2
 echo"<br>";
 $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj, true));

//Example-3
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;
?>