<?php
include("../config/config.php");
global $host, $username, $password;
$goback = "<a href = submit.html>Go Back</a>";

$connection = mysqli_connect($host, $username, $password, "Poemsite");
if (mysqli_connect_errno($connection))
{
    echo "Fail to connect" . mysqli_connect_error();
}


?>