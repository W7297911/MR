<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/3
 * Time: 18:28
 */
$score = 90;
if($score >= 90){
    echo "小明期末考试成绩优秀";
}
elseif($score<90 && $score>=80){
    echo "小明期末考试成绩良好";
}
elseif($score<80 && $score>=60){
    echo "小明期末考试成绩中等";
}
else{
    echo "小明期末考试成绩不及格";
}