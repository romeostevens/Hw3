<?php
function connect(){
    $db = mysqli_connect("localhost", "root", "root");
	if (mysqli_connect_errno($con))
    {
        echo "Fail to connect" . mysqli_connect_error();
    }
	mysqli_select_db("poem");
}
?>