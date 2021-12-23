<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- a simple game   -->


    <form  action="site10.php" method="post">
    Password :   <input type="password" name="password" > <br>
    <input type="Submit">
    </form>
  <?php

  echo $_POST["password"];

   ?>
  </body>
</html>
