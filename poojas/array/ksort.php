<?php
$arr=array(
1=>100, 
20=>400,
12=>10
);
print_r($arr);
ksort($arr);
print_r($arr);

krsort($arr);
echo "<br>";
print_r($arr);
?>