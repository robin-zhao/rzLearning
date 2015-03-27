<?php

class A {

    public function __destruct()
    {
        echo 1;
    }
}

class B extends A
{

    public function __destruct()
    {
        parent::__destruct();
        echo 2;
    }
    
}

$b = new B();

unset($b);
