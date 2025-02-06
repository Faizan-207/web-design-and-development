<?php


$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

// echo $username."<br>".$email."<br>".$password;





$users = [
    ["username"=> "faizan", "email" => "faizanakmal207@gamil.com","password"=> "123"],
    ["username"=> "ali", "email" => "ali@gamil.com","password"=> "456"]];

$check =false;

foreach ($users as $user){
    if($user["username"]==$username && $user["email"] == $email){
        $check =true;
        break;
    }

}

if($check){
    echo "Hi"."br".$username;
}
else{
    $users[]=["username"=>$username ,"email"=> $email,"password"=> $password];
    
    echo "User registered sucessfully";
}
?>