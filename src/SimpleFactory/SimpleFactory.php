<?php

namespace DesignPattern\SimpleFactory;

/**
 * Class SimpleFactory
 * @package DesignPattern\SimpleFactory
 */
class SimpleFactory
{
    /**
     * @return Bicycle
     */
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}
