<?php
include("./configs/config.php");
global $host, $username, $password;

$connection = mysqli_connect($host, $username, $password);
if (mysqli_connect_errno($connection))
{
    echo "Fail to connect" . mysqli_connect_error();
}

$db = "CREATE DATABASE PeomSite";

$connection = mysqli_select_db($db);

$poem = "CREATE TABLE PoemSite(title CHAR(100), author CHAR(100), 
    body CHAR(1000), rating INT)";

mysqli_query($connection, "INSERT INTO poem(title, author, body, rating)
    VALUES ('testing', 'test', 'lalalala', 3.5)");

if(!mysqli_query($connection, $sql))
    die('error: ' . mysqil_error($connection);

echo "1 record added";

mysqli_query($connection);
?>