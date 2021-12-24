<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <!-- classes and objects in php datatypes  -->
<?php
class Book{
  var $title;
  var $author;
  var $pages;
}

$book1= new Book; // an object
$book1 -> title = "harry potter";
$book1 -> author = "JK Rowlings ";
$book1 -> pages = 400;



$book2= new Book; // an object
$book2 -> title = "Lord of the ring";
$book2 -> author = "Tolkien" ;
$book2 -> pages = 700;

echo $book1 -> author;
echo $book2 -> title;


 ?>
  </body>
</html>
