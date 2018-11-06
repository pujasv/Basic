<?php
$conn =mysqli_connect("localhost","root","","poojas");
echo $email=$_POST['email'];
echo $psw=$_POST['password'];
echo $id=$_POST['id'];

 $str="update users set emailid='$email', password='$psw' where id='$id'";
//  echo "$str";
  $qry= mysqli_query($conn,$str) or die(mysqli_error($conn));
//print_r($qry);

header("location:showdata.php");



?>
