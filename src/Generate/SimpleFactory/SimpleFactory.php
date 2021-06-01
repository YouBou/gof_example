<?php

namespace DesignPattern\Generate\SimpleFactory;

/**
 * Class SimpleFactory
 * @package DesignPattern\Generate\SimpleFactory
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
