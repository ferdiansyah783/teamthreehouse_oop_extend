<?php

/**
 * Exercise extends
 * 1.create class Cycle
 * 2.class Cycle have properties,color,speed
 * 3.class Cycle have method canRide
 * 4.create another class ElectricCycle extend form Cycle
 * 5.ElectricCycle have a new method resourcePower
 */

 class Cycle{
    private $color;
    private $speed;

    public function __construct($color,$speed)
    {
        $this->color=$color;
        $this->speed=$speed;
    }

    public function canRide()
    {
        echo "This cycle can ride,this cycle have color {$this->color} and have speed {$this->speed}\n";
    }
 }

 class ElectricCycle extends Cycle{

    public function resourcePower()
    {
        echo "This cycle have batteraies power";
    }
 }

 $electric_cycle= new ElectricCycle("red","2 km/hours");
 $electric_cycle->canRide();


 $electric_cycle->resourcePower();
