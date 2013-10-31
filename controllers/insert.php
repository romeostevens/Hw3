<!DOCTYPE html>
<html>
<body>



<?php 
	$goback = "<a href = submit.html>Go Back</a>";
	
	if(strlen($_POST["author"]) > 30) {
		echo "Author name too long";
		echo "<br>";
		echo $goback;
	}
	else if(strlen($_POST["title"]) > 30) {
		echo "Title name too long";
		echo "<br>";
		echo $goback;
	}else { //length is ok to insert
		
		echo $_POST["author"]; 
		echo "<br>";
		echo $_POST["title"]; 
		echo "<br>";
		echo $_POST["poem"]; 
		
		//Insert into database here
		
		//--------------------------
	}
?>
<br>


</body>
</html>