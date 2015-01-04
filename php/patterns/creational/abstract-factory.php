<?php

abstract class RestrauntFactory
{
    abstract function createBreakfast();

    abstract function createLunch();
}

class ChineseRestrauntFactory
{
    public function createBreakfast()
    {
        return new Baozi();  
    }
    
    public function createLunch()
    {
        return new Fan();
    }
}

abstract class Breakfast
{
   abstract function taste(); 
}

class Baozi extends Breakfast
{
    public function taste()
    {
        return 'sweet';
    }
}

abstract class Lunch
{
    abstract function cost();
}

class Fan extends Lunch
{
    public function cost()
    {
        return 10;
    } 
}

$factory = new ChineseRestrauntFactory();
$breakfast = $factory->createBreakfast();
$lunch = $factory->createLunch();
var_dump($breakfast->taste());
var_dump($lunch->cost());

class Pizza extends Lunch
{
    public function cost()
    {
        return 100;
    }
}
class Cereal extends Breakfast
{
    public function taste()
    {
        return 'terrible';
    }
}

class WesternRestrauntFactory extends RestrauntFactory
{
    public function createBreakfast()
    {
        return new Cereal();
    }
    public function createLunch()
    {
        return new Pizza();
    }
}


$factory = new WesternRestrauntFactory();
$breakfast = $factory->createBreakfast();
$lunch = $factory->createLunch();
var_dump($breakfast->taste());
var_dump($lunch->cost());





