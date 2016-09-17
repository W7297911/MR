<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>检测数据类型</title>
</head font="楷体">
<body bgcolor="#a9a9a9">
<?php
/*is_bool                检测变量是否为布尔类型
 * is_string             检测变量是否为字符串类型
 * is_float/is_double    检测变量是否为浮点类型
 * is_integer/is_int     检测变量是否为整型
 * is_null               检测变量是否为空值
 * is_array              检测变量是否为数组类型
 * is_object             检测变量是否为一个对象类型
 * is_numeric            检测变量是否为数字或由数字组成的字符串
 */
$a=true;
$b="你好PHP";
$C=123456;
echo "1.变量是否为布尔型：".is_bool($a)."<br>";
echo "2.变量是否为字符串型：".is_string($b)."<br>";
echo "3.变量是否为整型：".is_int($C)."<br>";
echo "4.变量是否为浮点型：".is_float($C)."<br>";
?>

</body>
</html>

