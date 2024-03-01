<?php 

/*
 A function is a block of statements that can be used repeatedly in a program.
A function will not execute automatically when a page loads.
A function will be executed by a call to the function.

A user-defined function declaration starts with the word function:


*/
 
function writeMsg() {
    echo "Hello world!";
}

writeMsg();

/*
 Information can be passed to functions through arguments. An argument is just like a variable.

Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.
*/

function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

function Name($dname, $year) {
    echo "$dname Stanley. Born in $year <br>";
}

Name("Hege", "1975");
Name("Stale", "1978");
Name("Kai Jim", "1983");

//To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.
?>

<?php 
function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown
?>