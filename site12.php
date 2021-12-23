<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- a simple game   -->

 <form  action="site12.php" method="post">
  Apples:  <input type="checkbox" name="fruits[]" value="apples"> <br>
  Oranges: <input type="checkbox" name="fruits[]" value="orange"> <br>
  Pears: <input type="checkbox" name="fruits[]" value="pears"> <br>
   <input type="submit" >

 </form>

  <?php
   $fruits = $_POST["fruits"];
   echo $fruits[1];

   ?>
  </body>
</html>
