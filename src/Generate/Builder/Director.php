<?php

namespace DesignPattern\Generate\Builder;

use DesignPattern\Generate\Builder\Parts\Vehicle;

/**
 * Class Director
 * @package DesignPattern\Generate\Builder
 */
class Director
{
    /**
     * @param Builder $builder
     * @return Vehicle
     */
    public function build(Builder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}
