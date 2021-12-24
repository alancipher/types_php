<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- function in php     -->

 <form  action="site13.php" method="post">
 <input type="text" name="student" >

 <input type="submit" >
 </form>

  <?php
  // simple function
    function sayHi(){
      echo "say hi User!! <br>";
    }
    // function with parameter
    function sayHi2($name){
      echo "say hi User  $name <br>";
    }


    // function with more than one parameter
    function sayHi3($name, $age){
      echo "say hi User  $name  your age is $age <br>";
    }



     sayHi();
     sayHi2("Markiii");
     sayHi3("Dave", 17);
   ?>
  </body>
</html>
