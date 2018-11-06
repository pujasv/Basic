<?php
print_r($_POST);
echo "<pre>";//display all value in multiple level
print_r($_FILES);
echo "</pre>";
$tmp=$_FILES['x3']['tmp_name'];
$dest="upload/".time().$_FILES['x3']['name'];
$ans=move_uploaded_file($tmp, $dest);

//var_dump($ans);
?>