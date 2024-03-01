<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*  Variables are like containers which are used to store information and these variables are being outputed using the 'echo' function
    */
       $name="Don-Martinz";// The value is stored in the variable $name
       echo $name; // This will output the value called Don-Martinz
       echo"<br>";

       $one="10";
       $two="20";
       echo $one +$two;
       
       /* Variable scope is the area where the variable is used in our PHP script
            We have 3 types of variable scope:-Local ,-Global and Static
       */


      /* Local Variable is the variable created inside  the function and so this means that it can be viewed through the function
       */
        function food(){
            $food="Rice";
            echo"<p>The is viewed inside the function</p>";//Correct
        }
        //  food();
        //  echo"<p>The is viewed inside the function</p>";//Incorrect


         /* Global Variable is the variable created outside  the function and so this means that it can be viewed outside the function
       */
        $breakfast="Rice"; //global scope
        function meal(){

        // echo"<p>The is viewed inside the function  $breakfast </p>"; //Incorrect
        }
         meal();
         echo"<p>The is viewed inside the function $breakfast </p>"; //Correct

         /*We can access a global variable by using the keyword 'global' or the Super Variable called '$GLOBALS'
          */

        //   $x= 45;
        //   $y=70;

        //   function add(){
        //    $GLOBALS[x] = $GLOBALS[x] +$GLOBALS[y];
        //   }
        //   echo $x;
          //or
          
          $x= 45;
          $y=70;

          function add(){
            global $x ,$y;
            $x =$x =$y;
          }
          add();
          echo $x;

          /* Static variable is used to declare a variable to so that wouldn't be deleted after it is been executed
           */
          function fruits(){
            static $a =9;
            echo $a;
            echo'<pre>';
            $a++;
          }
          fruits();
          fruits();
          fruits();
          fruits();
    ?>
</body>
</html>