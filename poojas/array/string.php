<?php 
$aa="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore";

echo "$aa";

echo strlen($aa);
echo "<br>";
echo strtoupper($aa);
echo "<br>";
echo strtolower($aa);
echo "<br>";
echo ucwords($aa);
echo "<br>";
echo ucfirst($aa);
echo "<br>";
echo lcfirst($aa);
echo "<br>";
echo str_word_count($aa);
echo "<br>";
$aar= str_split($aa);
print_r($aar);
echo "<br>";
echo strrev($aa);
echo "<br>";
echo substr($aa, 0,10);
echo "<br>";
echo substr($aa, 10,20);
echo "<br>";
echo substr($aa, 0,-10);
echo "<br>";
echo substr($aa, -10);
echo "<br>";
$pp="xyz.abc.png";
echo "$pp";
$a=strchr($pp,".");
echo "<br>";
echo "$a";
$a=strrchr($pp, ".");
echo "<br>";
echo "$a";
echo "<br>";
echo ltrim($a,".");
echo "<br>";
echo rtrim($a,"g");
echo "<br>";
echo "$aa";///to remove space;
$aa="Lorem ipsum <b>dolor sit</b> amet, consectetur <u>adipisicing</u> elit, sed do eiusmod
tempor incididunt ut labore<script src='virys.js'></script>";
echo "$aa";
echo "<br>";
echo strip_tags($aa);//remove html tags

echo "<br>";
$data="d'souza";
echo "$data";
echo "<br>";
echo addslashes($data);
echo "<br>";
echo addcslashes("hello world","o");
echo "<br>";
echo stripslashes("D\'souza");
echo "<br>";
echo stripcslashes("hello wo\l\d");
echo "<br>";
echo chr(65);
echo "<br>";
echo md5($data);//32 char
echo "<br>";
echo sha1($data);
echo "<br>";
echo rand(1000,2000);
echo "<br>";
echo str_replace("sit", "poo", $aa);
 ?>