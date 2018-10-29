<?php
/**
 * desc : 接口
 * num : 6
 */

interface Logger{
    public function save($msg);
}

class FileLogger implements Logger {
    public function save($message) {
        var_dump('log into file:'.$message);
    }
}

class DataBassLogger implements Logger {
    public function save($message) {
        var_dump('log into databass:'.$message);
    }
}

class UserController {
    protected $logger ;

    /**
     * UserController constructor.
     * @param $log
     */
    // 这里用到了依赖注入，简单的理解，这里的参数声明必须是 FileLogger 的实例
    // public function ____construct(FileLogger $log) // 如果哪一天不想使用FileLogger， 而要全局改为DataBaseLogger, 这样修改量是不是太多了，这里就用到了接口
    public function __construct(Logger $log) // 我们只需要注入Logger 接口就OK了，具体你要使用哪个，你自己来定
    {
        $this->logger = $log;
    }

    public function register () {
        $user = "Madman";
        $this->logger->save($user);
    }
}

$userController = new UserController(new FileLogger());
$userController->register(); // log into file:Madman

$personController = new UserController(new DataBassLogger());
$personController->register();  // log into databass: Madman

/*
 * 总结：
 * 任何一个类实现(implements)一个接口，必须实现此接口中所有的方法;
 * 面向接口写代码，而不是面向具体的类写代码。
 * */


