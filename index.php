<?php
/**
 * desc : 接口
 * num : 6
 */

interface Logger{

}

class FileLogger {
    public function save($message) {
        var_dump('log into file:'.$message);
    }
}

class DataBassLogger {
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
    public function __construct(FileLogger $log) // 这里用到了依赖注入，简单的理解，这里的参数声明必须是 FileLogger 的实例
    {
        $this->logger = $log;
    }

    public function register () {
        $user = "Madman";
        $this->logger->save($user);
    }
}

$userController = new UserController(new FileLogger());
$userController->register();


