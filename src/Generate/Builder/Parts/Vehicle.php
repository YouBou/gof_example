<?php

namespace DesignPattern\Generate\Builder\Parts;

/**
 * Class Vehicle
 * @package DesignPattern\Generate\Builder\Parts
 */
abstract class Vehicle
{
    /**
     * @param string $key
     * @param object $value
     */
    public function setPart(string $key, object $value): void
    {
    }
}
