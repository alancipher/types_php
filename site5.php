<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--int out with strings  -->
   <?php

   $phrase = "Giraffe Academy ";
   $phrase[0]= "B";
    echo mb_strtolower($phrase);

    echo "<br>";
    echo mb_strtoupper($phrase);

    echo "<br>";
    echo $phrase[2];
       echo "<br>";
    echo str_replace("Biraffe", "Panda", $phrase);

       echo "<br>";

    $phrase2 = "the king's college";

    echo substr($phrase2, 11);


    ?>

  </body>
</html>
