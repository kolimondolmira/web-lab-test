<?php

include("connect.php");

$email =$_POST['email'];
$psw =$_POST['psw'];
$pswrepeat =$_POST['pswrepeat'];



echo "<h2>Registration Information:</h2>";
echo $email;
echo "<br>";
echo $psw;
echo "<br>";
echo $pswrepeat;
echo "<br>";



 $sql ="insert into  information values('','$email' ,  '$psw' , '$pswrepeat')";
 
 if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>