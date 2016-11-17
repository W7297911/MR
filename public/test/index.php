<?php
/**
 * Created by PhpStorm.
 * User: feiers
 * Date: 2016/11/17
 * Time: 12:33
 */
//mysql传统连接
        if($con = mysqli_connect('localhost','root','root')) {
            echo "连接成功";}
        else{
            echo "连接失败";}
        echo '<br/>';
        if($com = mysqli_select_db($con,'ddos')){
           echo "选择数据库成功";}
        else {
            echo "选择数据库失败";}
//mysqli连接数据库：面向对象
        $servername = "localhost";
        $username = "root";
        $password = "root";
        //创建连接
        $conn = new mysqli($servername, $username, $password);
        //检测连接
        if($conn ->connect_error){
            die("数据库连接失败：". $conn ->connect_error);
        }
        echo "数据库连接成功";
//mysqli连接数据库：面向过程
        $servername = "localhost";
        $username = "root";
        $password = "root";
        //创建数据库
        $conn = mysqli_connect($servername, $username, $password);
        //检测连接
        if(!$conn) {
            die("connection failed:". mysqli_connect_error());
        }
        echo "数据库连接成功";

//pdo连接数据库
        $servername = "localhost";
        $username = "root";
        $password = "root";
        try{
            $conn = new PDO("mysql:host = $servername, $username, $password");
            echo "数据库连接成功";
        }
        catch(PDOException $h){
            echo $h ->getMessage();
        }
?>