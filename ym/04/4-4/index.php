<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/3
 * Time: 18:44
 */
setlocale(LC_TIME,"chs");
$weekday = strftime("%A");
switch($weekday){
    case"星期一":
        echo "今天是$weekday ，新的一周开始了！";
        break;
    case "星期二":
        echo "今天是$weekday ，时刻保持良好的工作状态！";
        break;
    case"星期三":
        echo "今天是$weekday ，劳动者是最美的人，努力工作哟！";
        break;
    case "星期四":
        echo "今天是$weekday ，勤奋才能创造绩效，加油！";
        break;
    case "星期五":
        echo "今天是$weekday ，一定要出色的完成本周的任务！";
        break;
    case "星期六":
        echo "今天是$weekday ，可以睡到自然醒!";
        break;
    default:
        echo "今天是$weekday ，呵呵，轻松的玩上一天！";
        break;
}
?>