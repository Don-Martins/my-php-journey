<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <input type="text" name="Name" id="Name" placeholder="Enter Name">
  <input type="email" name="Email" id="Email"required>
  <input type="submit" value="Submit" name="Submit">
</form>
<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["Name"]);
  $email = test_input($_POST["Email"]);
//   $website = test_input($_POST["website"]);
//   $comment = test_input($_POST["comment"]);
//   $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
</body>
</html>