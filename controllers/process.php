<?php
include("../config/config.php");
global $host, $username, $password;
$goback = "<a href = submit.html>Go Back</a>";

$connection = mysqli_connect($host, $username, $password, "Poemsite");
if (mysqli_connect_errno($connection))
{
    echo "Fail to connect" . mysqli_connect_error();
}


$title = $_POST['Title'];
$author= $_POST['Author'];
$poem= $_POST['Poem'];
$rating = 2.5;
$id = mysql_query("SELECT COUNT(1) FROM poem");

if(strlen($_POST['Author']) > 30) {
  echo "Author name too long";
  echo "<br>";
  echo $goback;
 }
 else if(strlen($_POST['Title']) > 30) {
  echo "Title name too long";
  echo "<br>";
  echo $goback;
 }else { //length is ok to insert
//Add poem
$queries = "INSERT INTO poem(id, title, author, body, rating)
    VALUES ('$id', '$title', '$author', '$poem', '$rating')";
    if(!mysqli_query($connection, $queries))
{
    die("error: " . mysqli_error($connection));
}
}


?>