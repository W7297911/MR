<!
* Created by PhpStorm.
* User: feiers
* Date: 2016/8/28
* Time: 17:12
>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>整型</title>
</head>
<body>
<?php
/*
 * 整型数可以用十进制、八进制、十六进制来表示；
 * 如果用八进制表示，数字前必须加0；
 * 如果用十六进制表示，数字前必须加0x;
 */

    $str1 = 123;      //十进制变量
    $str2 = 0123;     //八进制变量
    $str3 = 0X23;     //十六进制变量
    echo"数字123不同进制的输出结果：<p>";
    echo"十进制的结果是：$str1<p>";
    echo"八进制的结果是：$str2<p>";
    echo"十六进制的结果是：$str3<p>";

?>
</body>
</html>
