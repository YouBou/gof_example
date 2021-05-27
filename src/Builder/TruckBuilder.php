<?php

namespace DesignPattern\Builder;

use DesignPattern\Builder\Parts\Truck;
use DesignPattern\Builder\Parts\Door;
use DesignPattern\Builder\Parts\Engine;
use DesignPattern\Builder\Parts\Wheel;
use DesignPattern\Builder\Parts\Vehicle;

/**
 * Class TruckBuilder
 * @package DesignPattern\Builder
 */
class TruckBuilder implements Builder
{
    /** @var Truck $truck */
    private Truck $truck;

    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}
