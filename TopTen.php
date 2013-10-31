<?php
include("./config/config.php");
global $host, $username, $password;

$connection = mysqli_connect($host, $username, $password, 'PoemSite');
if (mysqli_connect_errno($connection))
{
    echo "Fail to connect" . mysqli_connect_error();
}
$title = $_POST[0];

$query = "SELECT * FROM poem WHERE title= '$title'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
echo $row['title'];
echo "<br>";
echo $row['author'];
echo "<br>";
echo $row['body']; 

?>