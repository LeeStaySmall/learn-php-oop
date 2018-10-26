<?php
/**
 * desc : setter 和 getter
 * num : 2
 */

class Person
{
    public $name;
    public $sex;
    public $age;

    /**
     * Person constructor.  鼠标停放在$name上， 按command + n 生成这个变量的构造方法
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age) {  // setter
        if ($age < 18) {
            throw new Exception('not old enough');
        }
        $this->age = $age;
    }

    public function getAge() { // getter
        return $this->age;
    }
}

$madman = new Person('madman');
$madman -> sex = 'boy'; // 当无需对属性进行验证时
$madman -> setAge(24); // 当需要对属性进行验证时

var_dump($madman);

var_dump($madman -> getAge());

// 其实这里会有漏洞， 比如说， 在代码的最后通过直接对age赋值，就会真的改变这个值
$madman -> age = 17;
var_dump($madman);
// 这个时候并没有走setAge() 方法， 故绕过了验证,  下节讲到如何更安全定义。

