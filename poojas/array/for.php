<?php
$arr=array(1,2,3,4);
print_r($arr);
for($i=0; $i<count($arr);$i++)
{
	echo $i.'<br>';
	echo $arr[$i];
}


$i=0;
while ($i<count($arr)) {

echo $arr[$i].'<br>';	# code...
$i++;
}
?>