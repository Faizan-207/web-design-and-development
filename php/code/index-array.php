<?php
$students = array("abdullah ","toqeer","faizan");

$books = ["operating system","professional practice","Web design and development"];

$length = count($books);



//print array using loop
for ($i= 0; $i < $length; $i++){

    echo $books[$i];
    echo "<br>";
}


//print array using function
 echo "<pre>";
print_r($students);
echo "/pre>";

?>


