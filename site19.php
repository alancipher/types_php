<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- building a calculator  -->

 <form  action="site19.php" method="post">
   what your grade ?:

<input type="text" name="grade"> <br>

 <input type="submit" >
</form>

  <?php

$grade = $_POST["grade"];
 switch ($grade) {
   case "A":
     // code...
     echo "you did amazing!";
     break;
    case "B" :
     echo "you did pretty good!";
     break;
    case "C" :
      echo "you did poorly!";
      break;

    case "D" :
       echo "you did very bad !";
       break;

    case "E" :
        echo "you failed!";
        break;

   default:
     echo "that's not a grade ";
     break;
 }

   ?>
  </body>
</html>
