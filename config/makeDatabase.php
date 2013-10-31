<?php
include("../config/config.php");
global $host, $username, $password;

$connection = mysqli_connect($host, $username, $password);
if (mysqli_connect_errno($connection))
{
    echo "Fail to connect" . mysqli_connect_error();
}

$drop = "DROP DATABASE PoemSite";

if(!mysqli_query($connection, "DROP DATABASE IF EXISTS PoemSite")){
    die("0 error: " . mysqli_error($connection));
}

echo "Database dropped";
$db = "CREATE DATABASE PoemSite";

mysqli_query($connection, $db);

mysqli_select_db($connection, "PoemSite");

$poem = "CREATE TABLE poem(id INT, title CHAR(100), author CHAR(100),
    body TEXT(1000), rating INT)";

if(!mysqli_query($connection, $poem)){
    die('1 error: ' . mysqli_error($connection));
}

//Add first poem
$queries = "INSERT INTO poem(id, title, author, body, rating)
    VALUES (1, 'testing', 'test', '1', 3)";

if(!mysqli_query($connection, $queries)){
    die('1 error: ' . mysqli_error($connection));
}
echo " 1 record added";

//Add second poem
$queries = "INSERT INTO poem(id, title, author, body, rating)
    VALUES (2, 'testing', 'test', '2', 3)";

if(!mysqli_query($connection, $queries)){
    die('2 error: ' . mysqli_error($connection));
}

echo " 2 record added";

//Add third poem
$queries = "INSERT INTO poem(id, title, author, body, rating)
    VALUES (3, 'testing', 'test', '3', 3)";

if(!mysqli_query($connection, $queries)){
    die('3 error: ' . mysqli_error($connection));
}

echo " 3 record added";

//add 4 poem
$queries = "INSERT INTO poem(id, title, author, body, rating)
    VALUES (4, 'testing', 'test', '4', 3)";

if(!mysqli_query($connection, $queries)){
    die('4 error: ' . mysqli_error($connection));
}

echo " 4 record added";

//add 5 poem
$queries = "INSERT INTO poem(id, title, author, body, rating)
    VALUES (5, 'testing', 'test', '5', 3)";

if(!mysqli_query($connection, $queries)){
    die('5 error: ' . mysqli_error($connection));
}

echo " 5 record added";

//add 6 poem
$queries = "INSERT INTO poem(id, title, author, body, rating)
    VALUES (6, 'testing', 'test', '6', 5)";

if(!mysqli_query($connection, $queries)){
    die('6 error: ' . mysqli_error($connection));
}

echo "6 record added";

//add 7 poem
$queries = "INSERT INTO poem(id, title, author, body, rating)
    VALUES (7, 'testing', 'test', '7', 3)";

if(!mysqli_query($connection, $queries)){
    die('7 error: ' . mysqli_error($connection));
}

echo "7 record added";

//add 8 poem
$queries = "INSERT INTO poem(id, title, author, body, rating)
    VALUES (8, 'testing', 'test', '8', 5)";

if(!mysqli_query($connection, $queries)){
    die('8 error: ' . mysqli_error($connection));
}

echo "8 record added";

//add 9 poem
$queries = "INSERT INTO poem(id, title, author, body, rating)
    VALUES (9, 'testing', 'test', '9', 4)";

if(!mysqli_query($connection, $queries)){
    die('9 error: ' . mysqli_error($connection));
}

echo "9 record added";

//add 10 poem
$queries = "INSERT INTO poem(id, title, author, body, rating)
    VALUES (10, 'testing', 'test', '10', 3)";

if(!mysqli_query($connection, $queries)){
    die('10 error: ' . mysqli_error($connection));
}

echo "10 record added";

$name = '1';
$query = "SELECT * FROM poem WHERE rand()";
$result = mysqli_query($connection, $query);
if(!$result){
    die("failed" . mysqli_error($connection));
}
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
echo $row['body'];

mysqli_close($connection);
?>