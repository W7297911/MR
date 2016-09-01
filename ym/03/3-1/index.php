<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/1
 * Time: 21:29
 *使用define函数来定义名为MESSAGE的常量，并为其赋值“能看到一次”，然后分别输出常量
 * MESSAGE和Message。因为没有设置Case_sensitive参数为true，所以表示大小写敏感，因为执行程序时，解释器会认为没有定义该常量而输出提示
 * 并将Message作为普通字符串输出
 */
define("MESSAGE", "能看到一次");
echo MESSAGE;
echo Message;
?>
