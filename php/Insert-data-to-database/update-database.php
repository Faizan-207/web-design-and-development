<?php
require_once "connect.php";

$username =$_POST['username'];
$password =$_POST['password'];
$id =$_POST['id'];

$sql = "update login set username ='$username' , password ='$password' where id = '$id'";
$check = mysqli_query($conn,$sql);

if($check){
    echo "Record has been updated";?>
    <br>
    <a href="view-data.php">view data</a>
    <?php
    header('location:view-data.php');
}



?>
