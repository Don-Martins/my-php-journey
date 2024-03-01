<?php
//A session is a way to store information (in variables) to be used across multiple pages.

//Unlike a cookie, the information is not stored on the users computer.
//Example 1
session_start();


// Seting a session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";


?>
<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>