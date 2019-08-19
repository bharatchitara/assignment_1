
<?php

$link = mysqli_connect("127.0.0.1", "root", "123456", "you"); 
$set=$_POST['search'];
if($set){
$show ="SELECT * FROM test where Email='$set'";
$result = mysqli_query($link, $show);
while ($rows=mysqli_fetch_array($result))
 {
echo "Name of User :";
echo $rows['name'];
echo "<br>";
echo "Email ID :";
echo $rows['email'];
echo "<br>";
echo "Contact Number :";
echo $rows['phone'];
exit;
  }

echo "NOTHING FOUND";
}
?>