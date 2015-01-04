<?php

class Config
{
    private $registry = [];

    private static $instance = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if(is_null(self::$instance))
        {
          self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function setProperty($name, $value)
    {
        $this->registry[$name] = $value;
    } 

    public function getProperty($name)
    {
        return isset($this->registry[$name]) ? $this->registry[$name] : '';
    }

}


$config = Config::getInstance();
$config->setProperty('hello', 'world');

$config2 = Config::getInstance();
var_dump($config2->getProperty('hello'));
