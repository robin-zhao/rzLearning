<?php

class Factory
{
    public static function create($type)
    {
        $instance = null;
        switch($type)
        {
          case Human::MAN:
              $instance = new Man();
              break;
          case Human::WOMAN: 
              $instance = new Woman();
             break;
          default:
            throw new Exception("not supported.");
        }
        return $instance;
    }
}

abstract class Human
{
   const MAN = 1;
   const WOMAN = 2;

   abstract public function strength();
}

class Man extends Human
{
    public function strength()
    {
        return 100;
    }
}

class Woman extends Human
{
    public function strength()
    {
        return 80;
    }

}

$man = Factory::create(Human::MAN);

var_dump($man->strength());
