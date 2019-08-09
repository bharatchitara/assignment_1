<?php

$userid = filter_input(INPUT_POST, "userid ");                        // to create the variables.
$name = filter_input(INPUT_POST,"name");
$email=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
$number = filter_input(INPUT_POST,"phone");

$link = mysqli_connect("127.0.0.1", "root", "123456", "you");       //to create connection. 

if (!$link) {
echo "some error occurs.";	
}

$sql= "insert into test values ('$userid','$name','$email','$number')";          //insert query.

if ($link->query($sql) === TRUE) {
    echo "table created successfully";
} 
else 
{
    echo "please fill the details again." ;
}



?>