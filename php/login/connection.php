<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "student";
$conn = mysqli_connect($host,$username,$password,$db);

    if(!$conn){
        die("Connection Error".mysqli_error());
    }


    

?>