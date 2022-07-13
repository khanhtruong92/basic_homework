<?php 
namespace DesignPattern;

//Sử dụng Singleton để triển khai một lớp Logger, 
//phương thức chứa Logger logvới tham số đầu vào là một chuỗi 
//và đưa chuỗi đầu vào ra màn hình.

class Logger
{
    private static $instance = null;
    private $void;

    private function __construct($void)
    {
        $this->void = $void;
    }

    public static function getInstance($void)
    {
        if (self::$instance === null) {
            self::$instance = new Logger($void);
        }
        return self::$instance;
    }

    public function void()
    {
        echo $this->void;
    }
}

$khanh = Logger::getInstance('hello everyone');
$khanh->void();
