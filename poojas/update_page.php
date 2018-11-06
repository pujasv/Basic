<?php
$conn =mysqli_connect("localhost","root","","poojas");
 $email=$_POST['email'];
 $psw=$_POST['password'];
 $id=$_POST['id'];

 $str="update users set emailid='$email', password='$psw' where id='$id'";
//  echo "$str";
  $qry= mysqli_query($conn,$str) or die(mysqli_error($conn));
//print_r($qry);

header("location:showdata.php");



?>
