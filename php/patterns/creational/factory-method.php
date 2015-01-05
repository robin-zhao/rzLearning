<?php

/**
  
   The concrete factory creates the object.

*/

abstract class Creator
{
    abstract public function factory();
}

class HumanCreator extends Creator
{
    public function factory()
    {
        return new Human();
    }
}

abstract class Creature
{
    abstract public function getName();
}

class Human extends Creature
{
    public function getName()
    {
        return 'Human';
    }   
}

$creator = new HumanCreator();
$creature = $creator->factory();
var_dump($creature->getName());

class DogCreator extends Creator
{
    public function factory()
    {
        return new Dog();
    }
}

class Dog extends Creature
{
    public function getName()
    {
        return 'Dog';
    }
}

$creator2 = new DogCreator();
$creature = $creator2->factory();
var_dump($creature->getName());

