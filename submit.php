<html>
 <head>
  <title>Looney Limmericks</title>
 </head>
 <body>
  <h1>Submit a new Limmerick</h1>
  <form action ="./controllers/process.php" method="post">
  Title:<input type="text" name="Title"/><br />
  Author:<input type="text" name="Author"/><br />
  Limmerick:<textarea type="text" rows="5" name="Poem"/></textarea><br />
  <input type="submit" value="Submit new Limmerick" />
  </form>
  <br>
  <?php
  include("./config/config.php");
global $host, $username, $password;

$connection = mysqli_connect($host, $username, $password, "Poemsite");
if (mysqli_connect_errno($connection))
{
    echo "Fail to connect" . mysqli_connect_error();
}
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
 </body>
</html>