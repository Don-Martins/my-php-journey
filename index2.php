<?php
  function testpost(){
    if (isset($_POST["Submit"])){
    $Name= $_POST["name"];
    $email=$_POST["email"];
    $web=$_POST["website"];
    $comment= $_POST["Comment"];

    echo "<h1>Welcome $Name<br> You have with $email<br>Your website name is $web <br> And you left a comment which says $comment</h1>";
  }}
?>