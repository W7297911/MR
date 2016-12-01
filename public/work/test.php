<?php

//覆盖父类方法
class Csr{
    protected $wheel;
    protected $steer;
    protected $speed;

    public function say_type()
    {
        $this->wheel = "45.9cm";
        $this->steer = "15.7cm";
        $this->speed = "120m/s";
    }
}
class SmallCar extends Csr{
    public function say_type()
    {
        $this->wheel = "50.9cm";
        $this->steer = "19.2cm";
        $this->speed = "160m/s";
    }
    public function say_show(){
        $this->say_type();
        echo "Q7轿车轮胎尺寸：".$this->wheel."<br>";
        echo "Q7轿车方向盘尺寸：".$this->steer."<br>";
        echo "Q7轿车最高时速：".$this->speed."<br>";
    }
}
$car = new SmallCar();
$car -> say_show();


//static关键字

class web {
    static $num="1";
    static function change(){
        echo "您是本站第".self::$num."位访客.\t";
        self::$num++;
    }
}
$web = new Web();
echo "第一次通过对象调用：<br>";
$web->change();
$web->change();
$web->change();
echo "<br>第二次通过类名调用：<br>";
web::change();
web::change();


//static关键字
abstract class 抽象类名称{
    //抽象类成员变量列表
    abstract function  成员方法1(参数)；
    abstract function  成员方法2(参数)；
}


