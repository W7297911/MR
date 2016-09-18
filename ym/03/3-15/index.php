<?php
//自动转换
$a = true;
$b = false;
$c = "100abc";
$d = "abc123";
$e = 100;
$f = 0;
var_dump($a+$e);
echo ("<br>");
var_dump($b+$e);
echo ("<br>");
var_dump($c + $e);
echo ("<br>");
var_dump($d + $e);
echo ("<br>");
var_dump($a.$e);
echo ("<br>");
var_dump($a&&$e);


?>