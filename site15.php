<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- function giving back information  (return)   -->

 <form  action="site14.php" method="post">
 <input type="text" name="student" >

 <input type="submit" >
 </form>

  <?php
    // function cubing a number
    function cube($value){
    return   $value * $value * $value;

    }
    $cubeResult = cube(4);
    echo $cubeResult;
   ?>
  </body>
</html>
