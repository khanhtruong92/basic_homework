<?php
namespace DesignPattern;

abstract class Logger
{
    protected $content;

    public function __construct($content)
    {
        $this->content = $content;
    }

    abstract public function void();
}

class Std extends Logger 
{
    public function void()
    {
        echo 'Std logger: ' . $this->content . "\n";
    }
}

class File extends Logger
{
    public function void()
    {
        echo 'File logger: ' . $this->content . "\n";
    }
}

class LoggerManager
{
    private $driver;

    public function __construct($driver)
    {
        $this->driver = $driver;
    }

    public function log($content)
    {
        if ($this->driver == 'std') {
            $std = new Std($content);
            $std->void();
        } elseif ($this->driver == 'file') {
            $file = new File($content);
            $file->void();
        }
    }
}

$outputMsg = 'This is a error message';
$logger = new LoggerManager('file');
$logger->log($outputMsg);

$logger = new LoggerManager('std');
$logger->log($outputMsg);
