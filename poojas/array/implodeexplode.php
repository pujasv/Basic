<?php
$a='08/01/1991';
echo "$a";
echo '$a';
$ans=explode('/', $a);
print_r($ans);

list($x,$y,$z)=explode('/', $a);
echo "$x";


$arr=[8,1,1991];
print_r($arr);
$ans=implode("-", $arr);
print_r($ans);
?>