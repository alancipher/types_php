<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--get information from user from form  -->

    <form  action="site8.php" method="get">
     <input type="number" name="num1" >
     <br>

     <input type="number" name="num2" >
     <br>
     <input type="submit" >


    </form>
    <br>

       Answer is : <?php echo $_GET["num1"]  + $_GET["num2"]?>
  </body>
</html>
