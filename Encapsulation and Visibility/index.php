<?php

class Vehicle
{
    /* 
    public
    private
    protected
    */

    private $plate;
    private $color;
    protected $type = "Pickup Truck";

    public  function setPlate($plateParameter)
    {
        $this->plate = $plateParameter;
    }

    public  function getPlate()
    {
        return $this->plate;
    }
}

class Car extends Vehicle
{
    public function showType()
    {
        echo $this->type;
    }
}

$vehicle = new Vehicle();
$vehicle->setPlate("AFR1248");
echo $vehicle->getPlate() . "<br>";

$car = new Car();
$car->showType();
// fatal error -> echo $vehicle->private;
// fatal error -> echo $vehicle->protected;
