<?php
$conn =mysqli_connect("localhost","root","","poojas");
$uid=$_GET['user_id'];
 $str="select * from users where id='$uid'";
//  echo "$str";
  $qry= mysqli_query($conn,$str) or die(mysqli_error($conn));
//print_r($qry);

  $fans=$qry->fetch_object();
  print_r($fans);



?>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<form method= "POST" action="update_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="text" class="form-control" name="email" value="<?php echo $fans->emailid; ?>">
  </div>
</br>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" value="<?php echo $fans->password; ?>">
  </div>
  <input type="text" class="form-control" name="id" value="<?php echo $fans->id; ?>">
  <button type="submit" class="btn btn-default">Submit</button
  </form>
