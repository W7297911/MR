
<?php
//传值赋值
    // $str1 = "PHP编程词典";
    // $str2 = $str1;
    // $str1 = "我喜欢学习PHP";
    // echo "$str2";
    // echo "<br>";
    // echo "$str1";
//引用赋值
    $str = "学习php很轻松";
    $str2 = &$str;
    $str = "我要大声的告诉你:$str";
    echo $str2;
    echo "<p>";
    echo $str;
?>
