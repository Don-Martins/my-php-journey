<?php
//The PHP date() function is used to format a date and/or a time.

//Here are some characters that are commonly used for dates:

    // d - Represents the day of the month (01 to 31)
    // m - Represents a month (01 to 12)
    // Y - Represents a year (in four digits)
    // l (lowercase 'L') - Represents the day of the week

    Use the date() function to automatically update the copyright year on your website:

Example
&copy; 2010-<?php echo date("Y");?>
Get a Time
Here are some characters that are commonly used for times:

H - 24-hour format of an hour (00 to 23)
h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm)
The example below outputs the current time in the specified format:

Example

echo "The time is " . date("h:i:sa");


date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");

The PHP mktime() function returns the Unix timestamp for a date. The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.

Syntax
mktime(hour, minute, second, month, day, year)
The example below creates a date and time with the date() function from a number of parameters in the mktime() function:

Example
<?php 
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

?>