<?php
$conn =mysqli_connect("localhost","root","","poojas");
$uid=$_GET['user_id'];
 $str="delete from users where id='$uid'";
//  echo "$str";
  $qry= mysqli_query($conn,$str) or die(mysqli_error($conn));
//print_r($qry);
  
header("location:showdata.php");
?>