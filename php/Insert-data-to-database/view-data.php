<table border='1px solid black'>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Update</th>
        <th>Delete</th>

    </tr>
<?php
require_once "connect.php";
// $conn = mysqli_connect('localhost','root','','student');

$sql ="SELECT * FROM login";
$check = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($check);
if($rows> 0)
{   
    while($data = mysqli_fetch_assoc($check)){
        ?>
        <tr>
            <td><?php echo $data['id'];?></td>
            <td><?php echo $data['username'];?></td>
            <td><?php echo $data['password'];?></td>
            <td><a href="update.php?user=<?php echo $data['username'];?>&pass=<?php echo $data['password'];?>&id=<?php echo $data['id'];?>">update</a></td>
            <td><a href="delete.php?id=<?php echo $data['id'];?>">Delete</a></td>
        </tr>
        <?php
    //    echo  $data['id'].$data['username'].$data['password']."<br>";
    }
    
    
}

// echo $_GET['user'];
?>
<br>



</table>
<button style="margin-top:10px; background-color:lightblue;"><a href="login.php">Insert</a></button>