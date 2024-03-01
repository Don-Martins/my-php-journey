<?php
 /*
 A string  is a sequence of character

 We have different kinds of string functions used which are:
 1. strlen()
    The PHP strlen() function returns the length of a string.
    
 */
    echo strlen("Don-Martinz");
  /*  
 2. str_word_count()
 The PHP str_word_count() function counts the number of words in a string.   
 
*/
   echo str_word_count("Chimzaram Don-Martinz Louis");
   /*
 3. strrev()
   The PHP strrev() function reverses a string.
*/
  echo strrev("Fernard");
  /*
 4.  strpos()
 The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
*/
  echo strpos("Hi World","Hello World");
  /*
  5.str_replace 
  The PHP str_replace() function replaces some characters with some other characters in a string.
 */
   echo str_replace("Hello","And WElcome","Hello Everyone");
 

?>