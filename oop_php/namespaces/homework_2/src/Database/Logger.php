<?php
namespace Database;

class Logger
{
    public function log($message)
    {
        echo 'Log ' . $message . ' to the database';
    }
}
