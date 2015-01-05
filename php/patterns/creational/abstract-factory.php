<?php
/**

   Create a family of related objects.


- A Simple factory is normally called by the client via a static method, and returns one of several objects that all inherit/implement the same parent.

- The Factory Method design is really all about a “create” method that is implemented by sub classes.

- Abstract Factory design is about returning a family of related objects to the client.  It normally uses the Factory Method to create the objects.


*/

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


