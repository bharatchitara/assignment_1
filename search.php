<?php
include 'connect.php';

$search = filter_input(INPUT_POST,"search");
echo $search;

$con= "SELECT * FROM test";
 


if ($link->query($con) === TRUE) {
    echo "Data retrive successfully";
} 
else 
{
    echo "please fill the details again.2" ;
}


     echo "<table>";
         echo "<tr>";
           echo "<th>Name</th>";
		   echo "<th>Email</th>";
		   echo "<th>Phone</th>";
		 echo "</tr>";
		 
         echo "<tr>";		 
              echo "<td>".$name."</td>";
			  echo "<td>".$email."</td>";
			  echo "<td>".$number."</td>";
         echo "</tr>";
	 
     echo "</table>";
	  
?>