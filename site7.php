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
    <br>
    Age:  <input type="text" name="ages" >
    <input type="submit" >


    </form>
    <br>

   Your name is :  <?php  echo $_GET["nam"]?>

     <br>
   Your age is :  <?php  echo $_GET["ages"]?>

  </body>
</html>
