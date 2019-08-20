<?php
                                            
$name = filter_input(INPUT_POST,"name");                                         // to create the variables.                                                                
$email=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
$number = filter_input(INPUT_POST,"phone");

$link = mysqli_connect("127.0.0.1", "root", "123456", "you");                    //to create connection. 

if (!$link) {
echo "some error occurs.";	
}

$sql= "insert into test values ('$name','$email','$number')";          //insert query.


if ($link->query($sql) === TRUE) {
    echo "table created successsfully";
} 
else 
{
    echo "please fill the details again." ;
}
?>