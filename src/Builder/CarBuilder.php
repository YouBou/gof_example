<?php

namespace DesignPattern\Builder;

use DesignPattern\Builder\Parts\Car;
use DesignPattern\Builder\Parts\Door;
use DesignPattern\Builder\Parts\Engine;
use DesignPattern\Builder\Parts\Wheel;
use DesignPattern\Builder\Parts\Vehicle;

/**
 * Class CarBuilder
 * @package DesignPattern\Builder
 */
class CarBuilder implements Builder
{
    /** @var Car $car */
    private Car $car;

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function createVehicle()
    {
        $this->car = new Car();
    }

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}
