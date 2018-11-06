<?php

$arr=array(12,4,3,21,55);
print_r($arr);
echo "<br>";
array_push($arr, 100);
echo "<br>";
print_r($arr);

array_unshift($arr, 15);
echo "<br>";
print_r($arr);

array_pop($arr);
echo "<br>";
print_r($arr);
array_shift($arr);
echo "<br>";
print_r($arr);

unset($arr[2]);
echo "<br>";
print_r($arr);
unset($arr);
echo "<br>";
print_r($arr);
?>