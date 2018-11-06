<?php
$arr=array(12,43,3,234);
print_r($arr);
echo "<br>";
echo array_sum($arr);
echo "<br>";
echo array_product($arr);
$aa=array_reverse($arr);
echo "<br>";
print_r($aa);


echo current($arr);
echo next($arr);
echo end($arr);

$aa=array_flip($arr);
echo "<br>";
print_r($aa);

$aa=array_keys($arr);
echo "<br>";
print_r($aa);

$aa=array_pad($arr, 8, 100);
echo "<br>";
print_r($aa);

$aa=array_rand($arr);
echo "<br>";
print_r($aa);
echo $arr[$aa];



?>