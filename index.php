<?php require ("index2.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php testpost();?>

<form method="post" action="index.php"> 
 <?php 
// echo htmlspecialchars($_SERVER["PHP_SELF"]);
?>
Name: <input type="text" name="name">
E-mail: <input type="text" name="email">
Website: <input type="text" name="website">
 Your Comments: <input type="text" name="Comment" id="Comment" style="width="200px  height="200" >
<!-- Comment: <textarea name="comment" rows="5" cols="40" name="Comment"></textarea> -->
<input type="submit" value="Submit" name="Submit">
</form>

 </body>
</html>