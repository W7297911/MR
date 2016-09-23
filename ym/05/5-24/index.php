<?php
/**
 * Created by PhpStorm.
 * User: feiers
 * Date: 2016/9/23
 * Time: 20:18
 */
$arr = array("name"=>"张山","sex"=>"男","age"=>20);
extract($arr);
echo $name;
echo"</br>";
echo $sex;
echo "</br>";
echo $age;
