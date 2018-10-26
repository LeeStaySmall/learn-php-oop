<?php
/**
 * desc : 了解 php 中的 oop 思想
 * num : 1
 */
class Task {
    public $desc = 'go to store';

    // 一个类默认只能有一个__construct的构造方法， 会在类调用时默认执行
    public function __construct()
    {
        var_dump($this -> desc);
    }

    public function learn ($arg) {
        var_dump($arg);
    }
}

$task = new Task();
var_dump($task -> desc);
var_dump($task ->learn('php'));