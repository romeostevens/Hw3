<?php
include("../configs/config.php");
global $host, $username, $password;

class ConnectDatabase{
    function connect(){
        $db = mysqli_connect($host, $username, $password, "PoemSite");
        if (mysqli_connect_errno($con)){
            echo "Fail to connect" . mysqli_connect_error();
        }
    }
}
?>