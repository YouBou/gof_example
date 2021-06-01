<?php

namespace DesignPattern\Generate\Builder;

use DesignPattern\Generate\Builder\Parts\Car;
use DesignPattern\Generate\Builder\Parts\Door;
use DesignPattern\Generate\Builder\Parts\Engine;
use DesignPattern\Generate\Builder\Parts\Wheel;
use DesignPattern\Generate\Builder\Parts\Vehicle;

/**
 * Class CarBuilder
 * @package DesignPattern\Generate\Builder
 */
class CarBuilder implements Builder
{
    /** @var Car $car */
    private Car $car;

    public function addDoors(): void
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    public function addEngine(): void
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addWheel(): void
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function createVehicle(): void
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
