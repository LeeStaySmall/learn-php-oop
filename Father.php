<?php
/**
 * desc : 类的继承
 * num : 4
 */

class Father
{
    public function getEyesCount() {
        var_dump(2);
        return 2;
    }

    protected function getHairColor() {
        var_dump('black');
        return 'black';
    }
}

class Child extends Father{
    public function getChildHairColor()
    {
        return $this->getHairColor();
        // return parent::getHairColor(); // TODO: Change the autogenerated stub
    }

    protected function getHairColor() {
        var_dump('yellow');
    }
}

$child = new Child();
$child->getEyesCount();
// $child->getHairColor(); error  如果子类中没有getHairColor()，父类中定义为protected 的 属性不能直接被子类访问
$child->getChildHairColor();

/**
 * 总结：
 * 被声明为public 的属性和方法，能直接调用，或在子类以及子类的实例中直接调用；
 * 被声明为protected 的属性和方法，能在当前类里面被调用或者在子类中调用；
 * 被声明为private 的属性和方法，只能在当前类里面被调用
 */