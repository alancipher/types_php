<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--get information from user from form  -->

    <form  action="site7.php" method="get">
    Name:  <input type="text" name="nam" >
    <input type="submit" >

    </form>
    <br>

    <?php

    echo $_GET["nam"]?>

  </body>
</html>
