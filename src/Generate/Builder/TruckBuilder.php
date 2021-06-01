<?php

namespace DesignPattern\Generate\Builder;

use DesignPattern\Generate\Builder\Parts\Truck;
use DesignPattern\Generate\Builder\Parts\Door;
use DesignPattern\Generate\Builder\Parts\Engine;
use DesignPattern\Generate\Builder\Parts\Wheel;
use DesignPattern\Generate\Builder\Parts\Vehicle;

/**
 * Class TruckBuilder
 * @package DesignPattern\Generate\Builder
 */
class TruckBuilder implements Builder
{
    /** @var Truck $truck */
    private Truck $truck;

    public function addDoors(): void
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    public function addEngine(): void
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addWheel(): void
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    public function createVehicle(): void
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
