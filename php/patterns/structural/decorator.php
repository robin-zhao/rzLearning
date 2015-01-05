<?php

abstract class Human
{
    abstract function charm();
}

abstract class HumanDecorator extends Human
{
    protected $human;
    public function __construct(Human $human) 
    {
        $this->human = $human;
    }
}

class GlassDecorator extends HumanDecorator
{
    public function charm()
    {
        return $this->human->charm() + 20;
    }      
}

class TieDecorator extends HumanDecorator
{
    public function charm()
    {
        return $this->human->charm() + 50;
    }      
}

class Man extends Human
{
    public function charm()
    {
        return 0;
    }
}

$human = new GlassDecorator(new TieDecorator(new Man()));

var_dump($human->charm());
