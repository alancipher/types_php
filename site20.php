<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- building a calculator

 <form  action="site19.php" method="post">
   what your grade ?:

<input type="text" name="grade"> <br>

 <input type="submit" >
</form>-->

  <?php
  $index = 1;
while ($index <=5 ) {
  echo  "$index <br> ";
  $index++;
}


 $index2  = 6;
 do{
   echo "$index2 <br>";
   $index2++;
 }while ($index2 <= 5) ;


$luckyNumbers  = array(4, 8 , 14 ,16, 23, 42 );

 for ($i=0; $i < count($luckyNumbers); $i++) {
   // code...
   echo "$luckyNumbers[$i] is the $i ieme <br>";
 }
   ?>
  </body>
</html>
