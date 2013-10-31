<?php
class Database extends connectDatabase{
    function randomPoem(){
        $query = "";
    }
    
    function specificPoem($name){
        /**
        $name = 'testing';
        $query = "SELECT * FROM poem WHERE title = '$name'";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("failed" . mysqli_error($connection));
        }
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        echo $row['body'];
        */
        $query = "SELECT * FROM poem WHERE title= '$name'";
        $result = ($connection, $query);
        return $result;
    }
    
    function addPoem($title, $author, $body, $rating){
        $queries = "INSERT INTO poem(title, author, body, rating)
            VALUES ('$title', '$author', '$body', '$rating')";
        if(!mysqli_query($connection, $queries)){
            die('          adding error: ' . mysqli_error($connection));
        }
    }
    
    
}
?>