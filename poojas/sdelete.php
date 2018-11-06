<?php
session_start();
session_regenerate_id(true);
unset($_SESSION['name']);//use  for destroy variable
unset($_SESSION['age']);
session_destroy();//use for delete full session
?>
<a href="sshow.php">show session</a>


<!--check file in xampp/tmp folder>
change time in .ini file 1440
-->