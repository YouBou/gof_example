<?php

namespace DesignPattern\Structural\Flyweight;

/**
 * Interface Text
 * @package DesignPattern\Structural\Flyweight
 */
interface Text
{
    /**
     * @param string $extrinsicState
     * @return string
     */
    public function render(string $extrinsicState): string;
}
