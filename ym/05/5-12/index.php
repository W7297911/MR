<?php
/**
 * Created by PhpStorm.
 * User: feiers
 * Date: 2016/9/22
 * Time: 18:55
 */

$input = array("php","jsp","html");
$result1 = array_pad($input,5,8);
$result2 = array_pad($input,-5,"jsp");
$result3 = array_pad($input,1,"jsp");
print_r($result1);
echo "</br>";
print_r($result2);
echo "</br>";
print_r($result3);



