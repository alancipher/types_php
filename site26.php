<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <!-- object functions    -->
<?php
class Movie{
   public $title;
   private $rating;



  function __construct($title, $rating){
    $this->title = $title;
    $this->rating = $rating;

  }
  function getRating(){
    return  $this ->rating;
  }


  function setRating($new_rate){
     $this ->rating = $new_rate;
  }



}

$avengers = new Movie("Avengers", "PG-13");

//$avengers->rating = setRating("PG_12");
echo $avengers->getRating();


 ?>
  </body>
</html>
