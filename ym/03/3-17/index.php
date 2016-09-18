<?php
$str = "123.456abc";
$int = intval($str);
$flo = floatval($str);
$str = strval($str);
var_dump($int);
echo ("<br>");
var_dump($flo);
echo ("<br>");
var_dump($str);
