<?php

abstract class Unit{

    protected $power = 0;

    protected $units = [];  

    public function getPower() {
        foreach($this->units as $unit) {
            $this->power += $unit->getPower();
        }
        return $this->power;
    }

    public function addUnit(Unit $unit) {
        $this->units[] = $unit;
    }
}


class Army extends Unit{

}

class Soldier extends Unit{

    protected $power = 100;

    public function getPower() {
        return $this->power;
    }

    public function addUnit(Unit $unit)
    {
        throw new Exception("leaf");
    }
}

class Tank extends Unit{

    protected $power = 1000;
}


$soldier1 = new Soldier();
$soldier2 = new Soldier();
$soldier3 = new Soldier();

$tank = new Tank();
$tank->addUnit($soldier1);

$army = new Army();
$army->addUnit($soldier2);
$army->addUnit($soldier3);
$army->addUnit($tank);


var_dump($army->getPower());


