<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <input type="text" name="Name" id="Name" placeholder="Enter Name">
  <input type="email" name="Email" id="Email"required>
  <input type="submit" value="Submit" name="Submit">
</form>
<?php
//PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.

 if(isset($_REQUEST['Submit'])){

    $name=$_REQUEST['Name'];
    $Email=$_REQUEST['Email'];
    
    if(empty($name)){
        echo"Your Name field is empty";
    }else{
        echo "Welcome $name <br> And your Email is $Email" ;
    }
}

?>
</body>
</html>