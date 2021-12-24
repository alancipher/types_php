<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- associate array    -->

 <form  action="site13.php" method="post">
 <input type="text" name="student" >

 <input type="submit" >
 </form>

  <?php
     $grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+", "Alan" => "A");

    /*echo $grades["Oscar"];
     echo "<br>";
     echo $grades["Jim"];
     $grades["Jim"] = "F";

     echo "<br>";
     echo $grades["Jim"];
      echo "<br>";
     echo count($grades);*/

     echo $grades [$_POST["student"]];

   ?>
  </body>
</html>
