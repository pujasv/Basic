 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <?php
 $res =mysqli_connect("localhost","root","","poojas");
 $str="select * from users";
//  echo "$str";
  $qry= mysqli_query($res,$str) or die(mysqli_error($res));
//print_r($qry);
echo "<table class='table'>";
  if($qry->num_rows>0)
  {
  	while ($response=$qry->fetch_object()) {
  		// print_r($response);
echo "<tr>";
echo "<td>";

echo $response->id;  
echo "</td>";
echo "<td>";	
echo $response->emailid;
echo "</td>";
echo "<td>";  
echo $response->password;
echo "</td>"; 
echo "</tr>";

  	}
  }

 $ans=mysqli_close($res);
 ?>