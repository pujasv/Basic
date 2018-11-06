<?php
$conn =mysqli_connect("localhost","root","","poojas");
 print_r($res);
// print_r($_POST);
$email=$_POST['email'];
$psw=$_POST['pwd'];

$str= "insert into users (emailid,password) values ('$email','$psw')";
//echo $str;

$qry= mysqli_query($conn,$str) or die(mysqli_error($conn));
var_dump($qry);
$ans=mysqli_close($conn);
header("location:showdata.php");
?>