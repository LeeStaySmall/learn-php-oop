<?php
/**
 * 抽象类 以及 抽象方法
 * num : 5
 */

abstract class Shape
{
    public $color;
    protected $desc = '这是一个图形的基类';

    /**
     * Shape constructor.
     * @param $color
     */
    public function __construct($color = 'black')  // 设置默认值
    {
        $this->color = $color;
    }

    public function getDesc() {
        return $this->desc;
    }

    abstract public function getArea($length); // 规定一个抽象方法，所有的子类都必须实现这个抽象方法
}

class Square extends Shape
{
    public function getArea($length = 0)
    {
        return pow($length, 2);
    }
}

class Circle extends Shape
{
    public function getArea($length)
    {
        // TODO: Implement getArea() method.
    }
}

//$shape = new Shape(); // error
$square = new Square('red');
var_dump($square->color); // red
var_dump($square->getDesc()); // '这是一个图形的基类'
var_dump($square->getArea(4));

$circle = new Circle();
var_dump($circle->color); // black

/*
 * 总结：
 * 1、抽象类是用来继承的，不可以直接实例化;
 * 2、子类必须继承实现父类中的抽象方法;
 * */

