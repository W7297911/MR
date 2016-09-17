<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/1
 * Time: 21:53
 * 使用define函数来定义名为COUNT的常量，并为其赋值“能看到多次”。设置Case_sensitive参数为true,
 * 表示大小写不敏感，分别输出常量COUNT和Count。因为设置了大小写不敏感，因此程序会认为它和COUNT是同一常量，同样会输出值
 */
define("MESSAGE", "能看到一次");
echo MESSAGE;
echo Message;
define("COUNT","能看到多次",true);
echo "<br>";
echo COUNT;
echo "<br>";
echo Count;
echo "<br>";
echo constant("Count");
echo "<br>";
echo (defined("MESSAGE"));
?>