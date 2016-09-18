<?php
$str = "123.456abc";
$int = 100;
$boo = true;
settype($str,"integer");
var_dump($str);
echo "<br>";
settype($int,"boolean");
var_dump($int);
echo "<br>";
settype($boo,"string");
var_dump($boo);
