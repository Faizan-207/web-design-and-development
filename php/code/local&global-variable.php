<?php
$a = 100;

function show(){
    global $a;  //makes this variable global to use inside the function
    echo $a;
}

show();
?>
