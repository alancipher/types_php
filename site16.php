<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- if statements

 <form  action="site14.php" method="post">
 <input type="text" name="student" >

 <input type="submit" >
</form>-->

  <?php
   $isMale = true;
   $isTall = false;
    if($isMale && $isTall){
      echo "your are  a tall  man  !! <br>";

    }else if ($isMale&& !$isTall){
      echo "you are a male but you are not tall";

    }else  {
      echo "you are not male or your are not tall!! <br>";
    }

   ?>
  </body>
</html>
