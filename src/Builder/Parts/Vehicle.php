<?php

namespace DesignPattern\Builder\Parts;

/**
 * Class Vehicle
 * @package DesignPatter\Builder\Parts
 */
abstract class Vehicle
{
    /**
     * @param string $key
     * @param object $value
     */
    public function setPart(string $key, object $value)
    {
    }
}
