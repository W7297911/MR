<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/3
 * Time: 19:37
 */
$num = 1;
$str = "10以内的偶数为：";
while($num<=10){
    if($num %2 == 0){
        $str.=$num."";

    }
    $num++;
}
echo $str;

?>