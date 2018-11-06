<?php
//setcookie("prduct_name","shirt",time()-20);//store cookies in folder
setcookie("prduct_name","shirt",time()-20,'/');//across domain use /
setcookie("product_price",2000,time()-20,"/");
?>
<a href="show.php">show Cokkies</a>