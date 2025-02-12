<?php
require_once "connect.php";

$id = $_REQUEST['id'];
$sql = "DELETE FROM login where id ='$id'";
$check = mysqli_query($conn,$sql);
if($check){
    echo "Record delted successfully";
    header('location:view-data.php');
}


?>