<?php
include("../config/config.php");
global $host, $username, $password;

$connection = mysqli_connect($host, $username, $password, 'PoemSite');
if (mysqli_connect_errno($connection))
{
    echo "Fail to connect" . mysqli_connect_error();
}

$query = "SELECT * FROM poem ORDER BY rating DESC";
$result = mysqli_query($connection, $query);
if(!$result){ 
    die(mysqli_error($connection));
}

while($row = mysqli_fetch_array($result)){
    echo "body" . $row['body'] . " " . $row['rating'];
    echo "<br>";
}

?>