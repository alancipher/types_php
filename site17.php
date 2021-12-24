<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- comparaison

 <form  action="site14.php" method="post">
 <input type="text" name="student" >

 <input type="submit" >
</form>-->

  <?php
  function getMax ($num1, $num2, $num3){
  /*  if($num1 > $num2){
      return $num1;
    }else{
      return $num2;
    }*/

    if ($num1 >= $num2 && $num1 >= $num3){
      return $num1;
    }else if ($num2 >= $num1 && $num2 >= $num3){
      return $num3;

    }else {
      return $num3;
    }
  }

  echo getMax(300,9,10);
   ?>
  </body>
</html>
