<?php

require_once "connect.php";
// $conn = mysqli_connect('localhost','root','','student');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "insert into login (username,password) values ('$username','$password')";
mysqli_query($conn,$sql);
header('location:view-data.php');


?>