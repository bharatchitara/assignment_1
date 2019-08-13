<?php
//include 'search.php';
                                            
$name = filter_input(INPUT_POST,"name");                                        // to create the variables.
$email=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
$number = filter_input(INPUT_POST,"phone");

$link = mysqli_connect("127.0.0.1", "root", "123456", "you");                    //to create connection. 
mysqli_select_db($link,"you");

if (!$link) {
echo "some error occurs.";	
}

$sql= "insert into test values ('$name','$email','$number')";          //insert query.


if ($link->query($sql) === TRUE) {
    echo "table created successsfully";
} 
else 
{
    echo "please fill the details again.1" ;
}


$search = filter_input(INPUT_POST,"search");


$sqll= "SELECT * FROM test where email like '%$search%' or phone like'%$search%'";
$count = mysqli_num_rows($sqll);
var t= mysqli_num_row(sqll);
echo "t";

if($count==0){
	$output='No result found.';
}
else {
	while($row= mysqli_fetch_array($sqll)){
		$name = $row['name'];
		$email= $row['email'];
		$number= $row['phone'];
	}
}
$output = '<div>'.$name.' '.$email.'</div>';
print "$output";

?>