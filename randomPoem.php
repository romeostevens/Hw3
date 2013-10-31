
<html>
 <head>
  <title>Looney Limmericks</title>
 </head>
 <body>
  <h1>Random Poem</h1>
<?php
 include("./config/config.php");
global $host, $username, $password;

$connection = mysqli_connect($host, $username, $password, "Poemsite");
if (mysqli_connect_errno($connection))
{
    echo "Fail to connect" . mysqli_connect_error();
}
$query = "SELECT * FROM poem WHERE rand()";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("failed" . mysqli_error($connection));
        }
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
        echo $row['title'];
        echo "<br>";
        echo $row['author'];
        echo "<br>";
        echo $row['body'];
        echo "<br>";
        echo "Current Rating:";
        echo $row['rating'];

?>
<br>
Rate The random poem 1-5 stars!
<form name="rating" action="./controllers/rating.php" method="POST">
<input type="radio" name="group1" value="1"> 1Star 
<input type="radio" name="group1" value="2"> 2Star
<input type="radio" name="group1" value="3"> 3Star 
<input type="radio" name="group1" value="4"> 4Star
<input type="radio" name="group1" value="5"> 5Star 
<input type="submit" value="Submit Your Rating" />
<br>
<?php
  echo "Most Recent 10";
	for($i = 10, $j=1; $i>0; $i--, $j++){
    $query = "SELECT * FROM poem WHERE id = '$i'";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("failed" . mysqli_error($connection));
    }
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
    $name = $row['title'];
    echo "<br>";
    echo $j. " ";
	echo "<a href='./topTen.php'".$name."//>".$name."<//a>";
	}
	echo "<br>";
echo "Top Ten highest average rating";
echo "<br>";
while($row = mysqli_fetch_array($result)){
    echo $row['title'];
    echo "<br>";
}
	?>