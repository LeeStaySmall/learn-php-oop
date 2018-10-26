<?php
/**
 * desc : 理解封装以及封装的目的
 * num : 3
 */

class LightSwitch
{
    private $switch = false;
    // open light
    public function on(){  // 暴露给外部的打开灯的方法 ， 用户只需要调用这个方法就OK， 不需要知道具体怎么连接电源操作的。
        $this->connect();
    }

    // close light
    public function off() {
        $this->unconnect();
    }

    public function getSwitch() {
        var_dump($this->switch);
        return $this->switch;
    }

    // private 声明 LightSwitch Class 的私有方法，此方法不能直接被外部调用
    private function connect() {
        $this->switch = true;
        var_dump('connect success!');
    }

    protected function unconnect(){
        $this->switch = false;
        var_dump('connect error!');
    }

}

$light = new LightSwitch();
$light->on();
$light->getSwitch();
$light->off();
$light->getSwitch();

// $light->connect(); // error ：这个方法是LightSwitch Class 的内部（私有）方法，私有方法不能被外部直接调用，使用private声明；

// 这里会有一个疑惑？ 那 private 声明的 func() 和 protected 声明的 func() 有什么区别呢？