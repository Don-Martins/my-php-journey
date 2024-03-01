<?php
//A better method to open files is with the fopen() function. This function gives you more options than the readfile() function.

// //AJAX = Asynchronous JavaScript and XML
// CSS = Cascading Style Sheets
// HTML = Hyper Text Markup Language
// PHP = PHP Hypertext Preprocessor
// SQL = Structured Query Language
// SVG = Scalable Vector Graphics
// XML = EXtensible Markup Language
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);

//2
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

