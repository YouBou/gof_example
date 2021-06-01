<?php

namespace DesignPattern\Generate\Builder;

use DesignPattern\Generate\Builder\Parts\Vehicle;

/**
 * Interface Builder
 * @package DesignPattern\Generate\Builder
 */
interface Builder
{
    public function createVehicle(): void;

    public function addWheel(): void;

    public function addEngine(): void;

    public function addDoors(): void;

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle;
}
