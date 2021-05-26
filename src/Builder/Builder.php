<?php

namespace DesignPattern\Builder;

use DesignPattern\Builder\Parts\Vehicle;

/**
 * Interface Builder
 * @package DesignPattern\Builder
 */
interface Builder
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle;
}
