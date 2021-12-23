<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- a simple game   -->


    <form  action="site9.php" method="get">
    Color:   <input type="text" name="color" > <br>
    Plural noun:   <input type="text" name="pluralNoun" > <br>
    Celebrityr:   <input type="text" name="celebrity" > <br>
    <input type="Submit">
    </form>
  <?php
  $color = $_GET["color"];
  $pluralNoun = $_GET["pluralNoun"];
  $celebrity =$_GET["celebrity"];
  echo  "Roses are $color <br>";
  echo  " $pluralNoun are blue <br>";
  echo  " I love $celebrity <br>";
   ?>
  </body>
</html>
