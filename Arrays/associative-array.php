<?php
 /*Associative arrays are arrays that use named keys that you assign to them.

 There are two ways to create an associative array: */
 
 $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
 //or:
 
 $age['Peter'] = "35";
 $age['Ben'] = "37";
 $age['Joe'] = "43";


 $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

//To loop through and print all the values of an associative array, you could use a foreach loop, like this:

    
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
?>