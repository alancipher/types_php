<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <!-- constructor in php   -->
<?php
class Book{
  var $title;
  var $author;
  var $pages;

  function __construct($aTitle, $aAuthor, $aPages){
    $this->title = $aTitle;
    $this->author = $aAuthor;
    $this->pages = $aPages;
  }
}

$book1= new Book("harry potter","JK Rowlings ", 400 ); // an object
/*$book1 -> title = "harry potter";
$book1 -> author = "JK Rowlings ";
$book1 -> pages = 400;*/



$book2= new Book("Lord of the ring","Tolkien", 700 ); // an object
/*$book2 -> title = "Lord of the ring";
$book2 -> author = "Tolkien" ;
$book2 -> pages = 700;*/

echo $book1 -> author;
echo "<br>";
echo $book2 -> title;


 ?>
  </body>
</html>
